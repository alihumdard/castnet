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
        if($amount->fee<0.50){
            return redirect()->back()->with('error','Stripe requires a minimum transaction amount of $0.50.');
        }
        $charge = $this->createCharge($token['id'], $amount->fee*100);
        if (!empty($charge['error'])) {
            return redirect()->back()->with('error', $charge['error']);
        }
        if (!empty($charge) && $charge['status'] == 'succeeded') { 
            if(isset(Auth::user()->id)){
                $user = Auth::user();
                User::where('id',$user->id)->update([
                    'sponsor'=>1,
                ]);
            }else{
                $user = User::create([
                    'first_name'=>$request->contact_person_name,
                    'email'=>$request->email,
                    'password'=>bcrypt($request->password),
                    'type'=>1,
                    'sponsor'=>1,
                ]);
            }
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
