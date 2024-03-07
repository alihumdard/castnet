<?php

namespace App\Http\Controllers\Web\Payment;

use App\Http\Controllers\Controller;
use Stripe\Exception\InvalidRequestException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\CardException;
use App\Models\Event_Request_Type;
use App\Models\PaymentModel;
use Illuminate\Http\Request;
use App\Models\SponsorUser;
use Stripe\StripeClient;
use App\Models\User;
use Exception;
class SponsorPaymentController extends Controller
{
    private $stripe;
    public function __construct(){
        $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
    }

    public function payment(Request $request){
        $userData = [
            'sponsor_name' => $request->sponsor_name,
            'contact_person_name' => $request->contact_person_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'website_url' => $request->website_url,
            'industry_sector' => $request->industry_sector,
            'specific_interest' => $request->specific_interest,
            'geographic_focus' => $request->geographic_focus,
            'sponsorship_level' => $request->sponsorship_level,
            'sponsorship_goals' => $request->sponsorship_goals,
            'sponsorship_experiences' => $request->sponsorship_experiences,
            'sponsorship_preferences' => $request->sponsorship_preferences,
            'sponsorship_budget' => $request->sponsorship_budget,
            'payment_schedule' => $request->payment_schedule,
            'additional_support' => $request->additional_support,
            'hear_about' => $request->hear_about,
            'data_protection_consent' => $request->data_protection_consent,
            'full_name' => $request->full_name,
            'card_number' => $request->card_number,
            'expiry_month' => $request->expiry_month,
            'expiry_year' => $request->expiry_year,
            'cvv' => $request->cvv,
        ];
        session()->put('sponsorData', $userData);
        
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
        $amount = Event_Request_Type::where('id',4)->first('fee');
        $charge = $this->createCharge($token['id'], $amount->fee*100);
        if (!empty($charge) && $charge['status'] == 'succeeded') {      
            $user = User::create([
                'first_name'=>$request->contact_person_name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'type'=>1,
                'sponsor'=>1,
            ]);
            SponsorUser::create([
                'user_id' => $user->id,
                'sponsor_name' => $request->sponsor_name,
                'contact_person_name' => $request->contact_person_name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'website_url' => $request->website_url,
                'industry_sector' => $request->industry_sector,
                'specific_interest' => $request->specific_interest,
                'geographic_focus' => $request->geographic_focus,
                'sponsorship_level' => $request->sponsorship_level,
                'sponsorship_goals' => $request->sponsorship_goals,
                'sponsorship_experiences' => $request->sponsorship_experiences,
                'sponsorship_preferences' => $request->sponsorship_preferences,
                'sponsorship_budget' => $request->sponsorship_budget,
                'payment_schedule' => $request->payment_schedule,
                'additional_support' => $request->additional_support,
                'hear_about' => $request->hear_about,
                'data_protection_consent' => $request->data_protection_consent,
            ]);
            PaymentModel::create([
                'user_id'=>$user->id,
                'trx_id'=>$charge->id,
                'amount'=>$amount,
                'type'=>4,
            ]);
            session()->forget('sponsorData');
            return redirect()->back()->with('success','Congratulations! You have successfully joined the sponsorship. Transaction ID is #'.$charge->id);
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
                'description' => 'Congratulations, You have received a new payment for the creation of a new sponsorship account.'
            ]);
        } catch (InvalidRequestException $e) {
            $charge['error'] = $e->getMessage();
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}
