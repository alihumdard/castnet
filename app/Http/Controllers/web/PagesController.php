<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSection1;
use App\Models\HomeSection2;
use App\Models\HomeSection3;
use App\Models\HomeSection4;
use App\Models\HomeSection5;
use App\Models\HomeSection6;
use App\Models\HomeSection7;
use App\Models\HomeSection8;
use App\Models\HomeSection9;
use App\Models\HomeSectionEvent;
use App\Models\HomeSection4Detail;
use App\Models\HomeSectionSponser;
use App\Models\HomeSectionFeature;
use App\Models\HomeSection9Feature;
use App\Models\AboutPage;
use App\Models\PageBanner;
use App\Models\OurTeam;
use App\Models\Banner;
use Carbon\Carbon;
// About Page Models start
// About Page Models end
class PagesController extends Controller
{
    public function index(){
        $banner = Banner::first();
        $section1 = HomeSection1::all();
        $section2 = HomeSection2::first();
        $section3 = HomeSection3::first();
        $section4 = HomeSection4::first();
        $section5 = HomeSection5::first();
        $section6 = HomeSection6::first();
        $section7 = HomeSection7::first();
        $section8 = HomeSection8::first();
        $section9 = HomeSection9::first();
        $section4detail = HomeSection4Detail::get();
        $section5event = HomeSectionEvent::get();
        $section6sponsor = HomeSectionSponser::get();
        $section8feature1 = HomeSectionFeature::take(3)->get();
        $section8feature2 = HomeSectionFeature::skip(3)->take(3)->get();
        $section9feature = HomeSection9Feature::get();
        return view('web.pages.home',get_defined_vars());
    }

    public function aboutUs(){

        $aboutBanner = PageBanner::where('type', '1')->first();
        $section1Record = AboutPage::where('section', 'section1')->first();
        $section2Record = AboutPage::where('section', 'section2')->first();
        $section3Record = AboutPage::where('section', 'section3')->first();


        return view('web.pages.about',get_defined_vars());
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
        $executiveMembers = OurTeam::where('type', 1)->get();
        $staffMembers = OurTeam::where('type', 2)->get();

        return view('web.pages.team',get_defined_vars());
    }

    public function whoweare(){
        $section4Record = AboutPage::where('section', 'section4')->first();
        $section5Record = AboutPage::where('section', 'section5')->first();
        $section6 = HomeSection3::first();
        return view('web.pages.whoweare',get_defined_vars());
    }
}
