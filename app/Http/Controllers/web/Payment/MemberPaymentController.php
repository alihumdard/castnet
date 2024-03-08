<?php

namespace App\Http\Controllers\Web\Payment;

use App\Http\Controllers\Controller;
use Stripe\Exception\InvalidRequestException;
use Stripe\Exception\AuthenticationException;
use Stripe\Exception\ApiConnectionException;
use Illuminate\Support\Facades\Validator;
use Stripe\Exception\ApiErrorException;
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
        if($amount<0.50){
            return redirect()->back()->with('error','Stripe requires a minimum transaction amount of $0.50.');
        }
        $charge = $this->createCharge($token['id'], $amount*100);
        if (!empty($charge['error'])) {
            return redirect()->back()->with('error', $charge['error']);
        }
        if (!empty($charge) && $charge['status'] == 'succeeded') {  
            if(isset(Auth::user()->id)){
                $user = Auth::user();
                User::where('id',$user->id)->update([
                    'member'=>1,
                ]);
            }else{
                $user = User::create([
                    'first_name'=>$request->first_name,
                    'last_name'=>$request->last_name,
                    'email'=>$request->email,
                    'password'=>bcrypt($request->password),
                    'type'=>1,
                    'member'=>1,
                ]);
            }
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
            $error = $e->getError()->code;
            if ($error === 'incorrect_number') {
                $errorMessage = 'The card number is incorrect.';
            } elseif ($error === 'invalid_number') {
                $errorMessage = 'The card number is invalid.';
            } elseif ($error === 'invalid_expiry_month') {
                $errorMessage = "The card's expiration month is invalid.";
            } elseif ($error === 'invalid_expiry_year') {
                $errorMessage = "The card's expiration year is invalid.";
            } elseif ($error === 'invalid_cvc') {
                $errorMessage = "The card's security code (CVC) is invalid.";
            } elseif ($error === 'expired_card') {
                $errorMessage = 'The card has expired.';
            } elseif ($error === 'incorrect_cvc') {
                $errorMessage = "The card's security code (CVC) is incorrect.";
            } elseif ($error === 'card_declined') {
                $errorMessage = 'The card was declined. Please check the card details and try again.';
            } elseif ($error === 'missing') {
                $errorMessage = 'There is no card on a customer that is being charged.';
            } elseif ($error === 'processing_error') {
                $errorMessage = 'An error occurred while processing the card.';
            } else {
                $errorMessage = 'An unspecified card error occurred.';
            }
            $token['error'] = 'Card error: ' . $errorMessage;
        } catch (InvalidRequestException $e) {
            // Invalid parameters were supplied to Stripe's API
            $token['error'] = $e->getMessage();
        } catch (AuthenticationException $e) {
            // Authentication with Stripe's API failed
            $token['error'] = $e->getMessage();
        } catch (ApiConnectionException $e) {
            // Network communication with Stripe failed
            $token['error'] = $e->getMessage();
        } catch (ApiErrorException $e) {
            // Generic error occurred
            $token['error'] = $e->getMessage();
        } catch (Exception $e) {
            // Catch any other generic exceptions
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
                'description' => 'Congratulations! You have received a new payment for creating an Event Request.'
            ]);
        } catch (CardException $e) {
            $error = $e->getError()->code;
            if ($error === 'incorrect_number') {
                $errorMessage = 'The card number is incorrect.';
            } elseif ($error === 'invalid_number') {
                $errorMessage = 'The card number is invalid.';
            } elseif ($error === 'invalid_expiry_month') {
                $errorMessage = "The card's expiration month is invalid.";
            } elseif ($error === 'invalid_expiry_year') {
                $errorMessage = "The card's expiration year is invalid.";
            } elseif ($error === 'invalid_cvc') {
                $errorMessage = "The card's security code (CVC) is invalid.";
            } elseif ($error === 'expired_card') {
                $errorMessage = 'The card has expired.';
            } elseif ($error === 'incorrect_cvc') {
                $errorMessage = "The card's security code (CVC) is incorrect.";
            } elseif ($error === 'card_declined') {
                $errorMessage = 'The card was declined. Please check the card details and try again.';
            } elseif ($error === 'missing') {
                $errorMessage = 'There is no card on a customer that is being charged.';
            } elseif ($error === 'processing_error') {
                $errorMessage = 'An error occurred while processing the card.';
            } else {
                $errorMessage = 'An unspecified card error occurred.';
            }
            $charge['error'] = 'Card error: ' . $errorMessage;
        } catch (InvalidRequestException $e) {
            // Invalid parameters were supplied to Stripe's API
            $charge['error'] = $e->getMessage();
        } catch (AuthenticationException $e) {
            // Authentication with Stripe's API failed
            $charge['error'] = $e->getMessage();
        } catch (ApiConnectionException $e) {
            // Network communication with Stripe failed
            $charge['error'] = $e->getMessage();
        } catch (ApiErrorException $e) {
            // Generic error occurred
            $charge['error'] = $e->getMessage();
        } catch (\Exception $e) {
            // Catch any other generic exceptions
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    } 
}
