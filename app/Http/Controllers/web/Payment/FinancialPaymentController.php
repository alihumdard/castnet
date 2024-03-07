<?php

namespace App\Http\Controllers\Web\Payment;

use App\Http\Controllers\Controller;
use Stripe\Exception\InvalidRequestException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Stripe\Exception\CardException;
use App\Models\FinancialForm;
use App\Models\PaymentModel;
use Illuminate\Http\Request;
use Stripe\StripeClient;
use Exception;
class FinancialPaymentController extends Controller
{
    private $stripe;
    public function __construct(){
        $this->stripe = new StripeClient(config('stripe.api_keys.secret_key'));
    }

    public function payment(Request $request){
        $userData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'business_name' => $request->business_name,
            'business_address' => $request->business_address,
            'fund_purpose' => $request->fund_purpose,
            'country' => $request->country, 
            'business_type' => $request->business_type,
            'net_worth' => $request->net_worth,
            'program' => $request->program,
            'recent_year_income' => $request->recent_year_income,
            'full_name' => $request->full_name,
            'card_number' => $request->card_number,
            'expiry_month' => $request->expiry_month,
            'expiry_year' => $request->expiry_year,
            'cvv' => $request->cvv,
        ];
        session()->put('formData', $userData);
        
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
        $charge = $this->createCharge($token['id'], $amount*100);
        if (!empty($charge) && $charge['status'] == 'succeeded') {

            $file = time().'.'.$request->file->extension();
            $request->file->move(public_path('assets/web/images'), $file);
                 
            FinancialForm::create([
                'user_id' => Auth::user()->id,
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'business_name' => $request->business_name,
                'business_address' => $request->business_address,
                'fund_purpose' => $request->fund_purpose,
                'country' => $request->country, 
                'business_type' => $request->business_type,
                'net_worth' => $request->net_worth,
                'program' => $request->program,
                'recent_year_income' => $request->recent_year_income,
                'file' => $file,
            ]);
            PaymentModel::create([
                'user_id'=>Auth::user()->id,
                'trx_id'=>$charge->id,
                'amount'=>$amount,
                'type'=>5,
            ]);
            session()->forget('formData');
            return redirect()->back()->with('success','Congratulations! You have successfully sumbitted the request. Transaction ID is #'.$charge->id);
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
                'description' => 'Congratulations, You have received a new payment for the financial forms creation request.'
            ]);
        } catch (InvalidRequestException $e) {
            $charge['error'] = $e->getMessage();
        } catch (Exception $e) {
            $charge['error'] = $e->getMessage();
        }
        return $charge;
    }
}
