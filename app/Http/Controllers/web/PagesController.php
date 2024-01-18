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
use App\Models\InternationalEvent;
use App\Models\OurEventCalenderModel;
use App\Models\SectorCommonSection1;
use App\Models\SectorCommonSection2;
use App\Models\SectorModel;
use App\Models\AboutPage;
use App\Models\PageBanner;
use App\Models\OurTeam;
use App\Models\Banner;
use App\Models\MembershipSection2;
use App\Models\CommonEventSection;
use App\Models\JoinWidget;
use App\Models\MyBlog;
use App\Models\EventModel;
use App\Models\OurEventModel;
use App\Models\Membership_Level;

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
        $aboutBanner = PageBanner::where('type',1)->first();
        $section1Record = AboutPage::where('section',1)->first();
        $section2Record = AboutPage::where('section',2)->first();
        $section3Record = AboutPage::where('section',3)->first();
        return view('web.pages.about',get_defined_vars());
    }

    public function benefits(){
        return view('web.pages.benefits');
    }

    public function contactUs(){
        return view('web.pages.contact_us');
    }

    public function blog(){
        $blogBanner = PageBanner::where('type',28)->first();
        $blogs = MyBlog::all();
        return view('web.pages.blog',get_defined_vars());
    }
    public function events(){
        $eventsBanner = PageBanner::where('type',24)->first();
        $section1Record = EventModel::where('section',1)->first();
        $section3Record = EventModel::where('section',3)->first();
        $events = OurEventModel::all();

        return view('web.pages.events',get_defined_vars());
    }

    public function evaluation(){
        $evaluationBanner = PageBanner::where('type', '9')->first();
        $section1Record = AboutPage::where('section', '8')->first();
        $section2Record = AboutPage::where('section', '9')->first();
        $section3Record = AboutPage::where('section', '10')->first();
        $widget = JoinWidget::first();
        return view('web.pages.evaluation',get_defined_vars());
    }

    public function rules_of_engagement(){
        return view('web.pages.rules_of_engagement',get_defined_vars());
    }

    public function sectors(){
        $sectorBanner = PageBanner::where('type', 11)->first();
        $sectors = SectorModel::get();
        return view('web.pages.sectors',get_defined_vars());
    }
    public function construction(){
        $consBanner = PageBanner::where('type', 12)->first();
        $section1 = SectorCommonSection1::where('type',1)->first();
        $section2 = SectorCommonSection2::where('type',1)->first();
        return view('web.pages.construction',get_defined_vars());
    }
    public function agriculture(){
        $agriBanner = PageBanner::where('type', 13)->first();
        $section1 = SectorCommonSection1::where('type',2)->first();
        $section2 = SectorCommonSection2::where('type',2)->first();
        return view('web.pages.agriculture',get_defined_vars());
    }
    public function supply_chain(){
        $supplyBanner = PageBanner::where('type', 14)->first();
        $section1 = SectorCommonSection1::where('type',3)->first();
        $section2 = SectorCommonSection2::where('type',3)->first();
        return view('web.pages.supply_chain',get_defined_vars());
    }
    public function technology(){
        $tecBanner = PageBanner::where('type', 15)->first();
        $section1 = SectorCommonSection1::where('type',4)->first();
        $section2 = SectorCommonSection2::where('type',4)->first();
        return view('web.pages.technology',get_defined_vars());
    }
    public function natural_resources(){
        $natBanner = PageBanner::where('type', 16)->first();
        $section1 = SectorCommonSection1::where('type',5)->first();
        $section2 = SectorCommonSection2::where('type',5)->first();
        return view('web.pages.natural_resources',get_defined_vars());
    }
    public function energy(){
        $energyBanner = PageBanner::where('type', 17)->first();
        $section1 = SectorCommonSection1::where('type',6)->first();
        $section2 = SectorCommonSection2::where('type',6)->first();
        return view('web.pages.energy',get_defined_vars());
    }
    public function textiles(){
        $textBanner = PageBanner::where('type', 18)->first();
        $section1 = SectorCommonSection1::where('type',7)->first();
        $section2 = SectorCommonSection2::where('type',7)->first();
        return view('web.pages.textiles',get_defined_vars());
    }
    public function advocacy(){
        return view('web.pages.advocacy',get_defined_vars());
    }
    public function small_businesses(){
        return view('web.pages.small_businesses',get_defined_vars());
    }
    public function women(){
        return view('web.pages.women',get_defined_vars());
    }
    public function veterans(){
        return view('web.pages.veterans',get_defined_vars());
    }
    public function support_services(){
        return view('web.pages.support_services',get_defined_vars());
    }
    public function international_events(){
        $interBanner = PageBanner::where('type', 27)->first();
        $events = InternationalEvent::get();
        $widget = CommonEventSection::first();
        return view('web.pages.international_events',get_defined_vars());
    }
    public function event_request(){
        $erBanner = PageBanner::where('type', 26)->first();
        return view('web.pages.event_request',get_defined_vars());
    }
    public function event_calendar(){
        $ecBanner = PageBanner::where('type', 25)->first();
        $widget = CommonEventSection::first();
        $items = OurEventCalenderModel::get();
        return view('web.pages.event_calendar',get_defined_vars());
    }

    public function financial(){
        return view('web.pages.financial',get_defined_vars());
    }
    
    public function grants(){
        return view('web.pages.grants',get_defined_vars());
    }
    public function funding(){
        return view('web.pages.funding',get_defined_vars());
    }
    public function partners_sponsors(){
        return view('web.pages.partners_sponsors',get_defined_vars());
    }
    public function become_partner(){
        return view('web.pages.become_partner',get_defined_vars());
    }
    public function become_sponsor(){
        return view('web.pages.become_sponsor',get_defined_vars());
    }
    public function outreach(){
        return view('web.pages.outreach',get_defined_vars());
    }
    public function chad(){
        return view('web.pages.chad',get_defined_vars());
    }
    public function ghana(){
        return view('web.pages.ghana',get_defined_vars());
    }
    public function south_africa(){
        return view('web.pages.south_africa',get_defined_vars());
    }
    public function zimbabwe(){
        return view('web.pages.zimbabwe',get_defined_vars());
    }
    public function cameroon(){
        return view('web.pages.cameroon',get_defined_vars());
    }
    public function drc(){
        return view('web.pages.drc',get_defined_vars());
    }
    public function cote_divoire(){
        return view('web.pages.cote_divoire',get_defined_vars());
    }
    public function usa(){
        return view('web.pages.usa',get_defined_vars());
    }
    public function opportunities(){
        return view('web.pages.opportunities',get_defined_vars());
    }
    public function opportunities_agriculture(){
        return view('web.pages.opportunities_agriculture',get_defined_vars());
    }
    public function opportunities_construction(){
        return view('web.pages.opportunities_construction',get_defined_vars());
    }
    public function mining(){
        return view('web.pages.mining',get_defined_vars());
    }
    public function rfx(){
        return view('web.pages.rfx',get_defined_vars());
    }
    public function job_openings(){
        return view('web.pages.job_openings',get_defined_vars());
    }
    public function careers(){
        return view('web.pages.careers',get_defined_vars());
    }
    // *********************************************************************************************** working on below page ***********************************************************************
    public function join(){
        $joinBanner = PageBanner::where('type', '6')->first();
        $joinLevels =  Membership_Level::all();
        return view('web.pages.join',get_defined_vars());
    }
    public function membership(){
        $section1Record = AboutPage::where('section', '6')->first();
        $section2Record = MembershipSection2::all();
        $widget = JoinWidget::first();
        $membershipBanner = PageBanner::where('type', '5')->first();
        return view('web.pages.membership',get_defined_vars());
    }

    public function programs(){
        return view('web.pages.programs');
    }

    public function team(){
        $executiveMembers = OurTeam::where('type', 1)->get();
        $staffMembers = OurTeam::where('type', 2)->get();
        $teamBanner = PageBanner::where('type', '3')->first();
        return view('web.pages.team',get_defined_vars());
    }

    public function whoweare(){
        $section4Record = AboutPage::where('section', '4')->first();
        $section5Record = AboutPage::where('section', '5')->first();
        $section6 = HomeSection3::first();
        $whoWeAreBanner = PageBanner::where('type', '2')->first();
        return view('web.pages.whoweare',get_defined_vars());
    }
}
