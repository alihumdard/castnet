<?php

namespace App\Http\Controllers\Web\Payment;

use App\Http\Controllers\Controller;
use Stripe\Exception\InvalidRequestException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\CardException;
use App\Models\PaymentModel;
use Illuminate\Http\Request;
use App\Models\PartnerUser;
use Stripe\StripeClient;
use App\Models\User;
class PartnerPaymentController extends Controller
{
    private $stripe;
    public function __construct(){
        $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
    }

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
            'full_name' => $request->full_name,
            'card_number' => $request->card_number,
            'expiry_month' => $request->expiry_month,
            'expiry_year' => $request->expiry_year,
            'cvv' => $request->cvv,
        ];
        session()->put('partnerData', $userData);
        
        $validator = Validator::make($request->all(), [
            'full_name' => 'required',
            'card_number' => 'required',
            'expiry_month' => 'required',
            'expiry_year' => 'required',
            'cvv' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first());
        }

        $token = $this->createToken($request);
        if (!empty($token['error'])) {
            return redirect()->back()->with('error', $token['error']);
        }
        if (empty($token['id'])) {
            return redirect()->back()->with('error', 'Payment failed.');
        }
        $amount = intval(preg_replace('/[^0-9]+/', '', $request->membership_level));
        $charge = $this->createCharge($token['id'], 5*100);
        if (!empty($charge) && $charge['status'] == 'succeeded') {      
            $user = User::create([
                'first_name'=>$request->contact_person_name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'type'=>1,
                'partner'=>1,
            ]);
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
                'trx_id'=>$charge->id,
                'amount'=>$amount,
                'type'=>1,
            ]);
            session()->forget('partnerData');
            return redirect()->back()->with('success','Congratulations! You have successfully joined the partnership. Transaction ID is #'.$charge->id);
        } else {
            return redirect()->back()->with('error', 'Payment failed.');
        }
        return redirect()->back()->with('error', 'Payment failed.');
    }

    private function createToken($cardData){
        $token = null;
        try {
            $token = $this->stripe->tokens->create([
                'card' => [
                    'number' => $cardData['card_number'],
                    'exp_month' => $cardData['expiry_month'],
                    'exp_year' => $cardData['expiry_year'],
                    'cvc' => $cardData['cvv']
                ]
            ]);
        } catch (CardException $e) {
            $token['error'] = $e->getError()->message;
        } catch (Exception $e) {
            $token['error'] = $e->getMessage();
        }
        return $token;
    }

    private function createCharge($tokenId, $amount){
        $charge = null;
        try {
            $charge = $this->stripe->charges->create([
                'amount' => $amount,
                'currency' => 'usd',
                'source' => $tokenId,
                'description' => 'Congratulations, You have received a new payment for the creation of a new partnership account.'
            ]);
        } catch (InvalidRequestException $e) {
            $charge['error'] = $e->getMessage();
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}
