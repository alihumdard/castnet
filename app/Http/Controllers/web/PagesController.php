<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSection1;
use App\Models\HomeSection2;
use App\Models\HomeSection3;
use App\Models\Banner;

class PagesController extends Controller
{
    public function index(){
        $banner = Banner::first();
        $section1 = HomeSection1::all();
        $section2 = HomeSection2::first();
        $section3 = HomeSection3::first();
        return view('web.pages.home',compact('banner','section1','section2','section3'));
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
