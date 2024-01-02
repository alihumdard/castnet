<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('web.pages.home');
    }

    public function aboutUs(){
        return view('web.pages.about');
    }

    public function benefits(){
        return view('web.pages.benefits');
    }

    public function contactUs(){
        return view('web.pages.contact_us');
    }

    public function evaluation(){
        return view('web.pages.evaluation');
    }

    public function join(){
        return view('web.pages.join');
    }

    public function membership(){
        return view('web.pages.membership');
    }

    public function programs(){
        return view('web.pages.programs');
    }

    public function team(){
        return view('web.pages.team');
    }

    public function whoweare(){
        return view('web.pages.whoweare');
    }
}
