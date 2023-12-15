<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Principle;

class HomeController extends Controller
{
    public function index(Request $request){
        $data['principles'] = Principle::where(['status' => 'Active'])->take(3)->latest()->get()->toArray();
        return view('web.pages.home',$data);
    }
}
