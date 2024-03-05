<?php

namespace App\Http\Controllers\Web\Payment;

use App\Http\Controllers\Controller;
use Stripe\Exception\InvalidRequestException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\CardException;
use App\Models\CompanyInformation;
use App\Models\PaymentModel;
use Illuminate\Http\Request;
use Stripe\StripeClient;
use App\Models\User;
use Exception;

class MemberPaymentController extends Controller
{
    private $stripe;
    public function __construct(){
        $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
    }

    public function payment(Request $request){
        $userData = [
            'organization_name' => $request->organization_name,
            'phone_number' => $request->phone_number,
            'website_address' => $request->website_address,
            'number_of_employees' => $request->number_of_employees,
            'billing_email' => $request->billing_email,
            'billing_address' => $request->billing_address,
            'billing_city' => $request->billing_city,
            'billing_state' => $request->billing_state,
            'billing_zip' => $request->billing_zip,
            'billing_country' => $request->billing_country,
            'billing_address_check' => $request->address_check,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'title' => $request->title,
            'primary_phone' => $request->primary_phone,
            'email' => $request->email,
            'membership_level' => $request->membership_level,
            'about_organization' => $request->about_organization,
            'ownership_structure' => $request->ownership_structure,
            'reason_joining' => $request->reason_joining,
            'full_name' => $request->full_name,
            'card_number' => $request->card_number,
            'expiry_month' => $request->expiry_month,
            'expiry_year' => $request->expiry_year,
            'cvv' => $request->cvv,
        ];
        session()->put('userMemberData', $userData);
        
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
        $charge = $this->createCharge($token['id'], $amount*100);
        if (!empty($charge) && $charge['status'] == 'succeeded') {      
            $user = User::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'type'=>1,
                'member'=>1,
            ]);
            CompanyInformation::create([
                'user_id' => $user->id,
                'organization_name' => $request->organization_name,
                'phone_number' => $request->phone_number,
                'website_address' => $request->website_address,
                'number_of_employees' => $request->number_of_employees,
                'billing_email' => $request->billing_email,
                'billing_address' => $request->billing_address,
                'billing_city' => $request->billing_city,
                'billing_state' => $request->billing_state,
                'billing_zip' => $request->billing_zip,
                'billing_country' => $request->billing_country,
                'billing_address_check' => $request->address_check,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'title' => $request->title,
                'primary_phone' => $request->primary_phone,
                'email' => $request->email,
                'membership_level' => $request->membership_level,
                'about_organization' => $request->about_organization,
                'ownership_structure' => $request->ownership_structure,
                'reason_joining' => $request->reason_joining,
            ]);
            PaymentModel::create([
                'user_id'=>$user->id,
                'trx_id'=>$charge->id,
                'amount'=>$amount,
                'type'=>1,
            ]);
            session()->forget('userMemberData');
            return redirect()->back()->with('success','Congratulations! You have successfully joined the membership program. Transaction ID is #'.$charge->id);
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
                'description' => 'Congratulations, You have received a new payment for the creation of a new member account.'
            ]);
        } catch (InvalidRequestException $e) {
            $charge['error'] = $e->getMessage();
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}
