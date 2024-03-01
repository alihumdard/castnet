<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Support\Facades\Auth;
use App\Models\Experience;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\NewsletterModel;
use Illuminate\Support\Facades\Cookie;
use App\Models\User;
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
        return redirect()->back()->with('success',$message);
    }

    public function jobApply(Request $request,$id){
        $validator = Validator::make($request->all(), [
            'cv' => 'required|file|mimes:pdf,doc,docx,txt,rtf,html,jpg,png,odt,tex|max:2048',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->hasFile('cv')) {
            $cv = $request->file('cv');
            $cvFileName = time() . '_' . $cv->getClientOriginalName();
            $cv->move(public_path('assets/web/applications'), $cvFileName);
            $file = $cvFileName;
        }

        Application::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'job_id' => $id,
            'file' => $file,
        ]);
        return redirect()->route('web.job_openings')->with('success', 'Application submitted successfully.');
    }

    public function logged(){
        if(Auth::user()->type==0){
            return redirect()->route('admin.index');
        }else{
            return redirect()->route('web.index')->with('success','You have successfully login your account.');
        }
    }

    public function checkEmail(Request $request){
        $user = User::where('email',$request->email_check)->first();
        if($user) {
            echo "false";
        } else {
            echo "true";
        }
    }
}
