<?php

namespace App\Http\Controllers\Web\Payment;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\FinancialPayment;
use App\Models\FinancialForm;
use App\Models\PaymentModel;
use Illuminate\Http\Request;
use Stripe;
class FinancialPaymentController extends Controller
{
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
        ];
        session()->put('formData', $userData);
        
        $financial = FinancialPayment::first();

        if($request->fund_purpose=="Investments"){
            $amount = intval(preg_replace('/[^0-9]+/', '', $financial->investment));
        } elseif($request->fund_purpose=="Loans"){
            $amount = intval(preg_replace('/[^0-9]+/', '',$financial->loans));
        } else{
            $amount = intval(preg_replace('/[^0-9]+/', '', $financial->grants));
        }

        if($amount<0.50){
            return redirect()->back()->with('error','Stripe requires a minimum transaction amount of $0.50.');
        }

        try {
            Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
            $stripe = Stripe\Charge::create([
                "amount" => $amount * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => 'Congratulations! You have received a new payment from financial forms.'
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
                'trx_id'=>$stripe['id'],
                'amount'=>$amount,
                'type'=>5,
            ]);
            session()->forget('formData');
            return redirect()->back()->with('success','Congratulations! You have successfully sumbitted the request. Transaction ID is #'.$stripe['id']);
        } else{
            return redirect()->back()->with('error','Oops! Something went wrong please try again.');
        }
    }
}
