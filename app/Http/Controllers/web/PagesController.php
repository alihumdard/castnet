<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\HomeSection1;
use App\Models\HomeSection2;

class PagesController extends Controller
{
    public function index(){
        $heroBannerData = Banner::first();
        $section2Data = HomeSection2::first();
        $section1Data = HomeSection1::all()->toarray();

        // dd($section1Data);
        return view('web.pages.home', [
            'heroBannerData' => $heroBannerData,
            'section1Data' => $section1Data,
            'section2Data' => $section2Data,
        ]);
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
