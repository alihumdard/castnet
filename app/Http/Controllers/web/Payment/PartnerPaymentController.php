<?php

namespace App\Http\Controllers\Web\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Event_Request_Type;
use App\Models\PaymentModel;
use Illuminate\Http\Request;
use App\Models\PartnerUser;
use App\Models\User;
use Stripe;
class PartnerPaymentController extends Controller
{
    public function payment(Request $request){
        $userData = [
            'organization_name' => $request->organization_name,
            'contact_person_name' => $request->contact_person_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'organization_website' => $request->organization_website,
            'industry_sector' => $request->industry_sector,
            'partnership_dur' => $request->partnership_dur,
            'partnership_interest' => $request->partnership_interest, 
            'previous_partnership' => $request->previous_partnership,
            'past_partnership_details' => $request->past_partnership_details,
            'target_geographic_regions' => $request->target_geographic_regions,
            'project_opportunities' => $request->project_opportunities,
            'non_monetary_support' => $request->non_monetary_support,
            'partnering_goals' => $request->partnering_goals,
            'expected_outcomes' => $request->expected_outcomes,
            'non_monetary_support_offered' => $request->non_monetary_support_offered,
            'legal_compliance_agree' => $request->legal_compliance_agree,
            'legal_compliance_understanding' => $request->legal_compliance_understanding,
            'hear_about' => $request->hear_about,
            'additional_information' => $request->additional_information,
            'data_protection_consent' => $request->data_protection_consent,
        ];
        session()->put('partnerData', $userData);
       
        $amount = Event_Request_Type::where('id',3)->first('fee');
        if($amount->fee<0.50){
            return redirect()->back()->with('error','Stripe requires a minimum transaction amount of $0.50.');
        }
        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $stripe = Stripe\Charge::create([
                "amount" => $amount->fee * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => 'Congratulations! You have successfully joined the partnership.'
            ]);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            $payment['error'] = $e->getMessage();
        } catch (\Exception $e) {
            $payment['error'] = $e->getMessage();
        }
        if(!empty($payment['error'])){
            return redirect()->back()->with('error', $payment['error']);
        }
        if($stripe['status'] == 'succeeded'){  
            if(isset(Auth::user()->id)){
                $user = Auth::user();
                User::where('id',$user->id)->update([
                    'partner'=>1,
                ]);
            }else{
                $user = User::create([
                    'first_name'=>$request->contact_person_name,
                    'email'=>$request->email,
                    'password'=>bcrypt($request->password),
                    'type'=>1,
                    'partner'=>1,
                ]);
            }
            PartnerUser::create([
                'user_id' => $user->id,
                'organization_name' => $request->organization_name,
                'contact_person_name' => $request->contact_person_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'organization_website' => $request->organization_website,
                'industry_sector' => $request->industry_sector,
                'partnership_dur' => $request->partnership_dur,
                'partnership_interest' => $request->partnership_interest, 
                'previous_partnership' => $request->previous_partnership,
                'past_partnership_details' => $request->past_partnership_details,
                'target_geographic_regions' => $request->target_geographic_regions,
                'project_opportunities' => $request->project_opportunities,
                'non_monetary_support' => $request->non_monetary_support,
                'partnering_goals' => $request->partnering_goals,
                'expected_outcomes' => $request->expected_outcomes,
                'non_monetary_support_offered' => $request->non_monetary_support_offered,
                'legal_compliance_agree' => $request->legal_compliance_agree,
                'legal_compliance_understanding' => $request->legal_compliance_understanding,
                'hear_about' => $request->hear_about,
                'additional_information' => $request->additional_information,
                'data_protection_consent' => $request->data_protection_consent,
            ]);
            PaymentModel::create([
                'user_id'=>$user->id,
                'trx_id'=>$stripe['id'],
                'amount'=>$amount,
                'type'=>3,
            ]);
            session()->forget('partnerData');
            return redirect()->back()->with('success','Congratulations! You have successfully joined the partnership. Transaction ID is #'.$stripe['id']);
        } else{
            return redirect()->back()->with('error','Oops! Something went wrong please try again.');
        }
    }
}
