<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Experience;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\NewsletterModel;
use Illuminate\Support\Facades\Cookie;
class DefaultController extends Controller
{
    public function subscribe(Request $request){
        if(NewsletterModel::where('email',$request->email)->count()>0){
            return response()->json(['status' => false,'message'=>'Email has already been taken!']);
        }
        NewsletterModel::create([
            'email'=>$request->email
        ]);
        return response()->json(['status' => true,'message'=>'You have successfully subscribed!']);
    }

    public function weclome(Request $request){
        $experienceInfo = [
            'organization' => $request->radioNumber1 === 'Other' ? $request->other_value : $request->radioNumber1,
            'castnet_visit' => $request->radioNumber2,
            'sector' => $request->radioNumber3,
            'challenge' => $request->radioNumber4,
            'membership_info' => $request->radioNumber5,
            'contact_info' => $request->name,
            'phone' => $request->phone,
            'company' => $request->company,
            'email' => $request->email,
        ];
        Experience::create($experienceInfo);
        Cookie::queue('user_ip', $request->ip(), 30 * 24 * 60);
        $message = 'Experience added successfully';
        return redirect()->back();
    }

    public function logged(){
        if(Auth::user()->type==1){
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('web.index')->with('success','You have successfully login your account.');
        }
    }
}
