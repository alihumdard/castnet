<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\NewsletterModel;
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
}
