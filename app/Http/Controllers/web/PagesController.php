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
use App\Models\MembershipCommonModel;
use App\Models\RulesOfEngagementModel;
use App\Models\OutreachCommonSectionModel;
use App\Models\BenefitsModel;
use App\Models\ProgramSection1;
use App\Models\ProgramSection2;
use App\Models\BenefitsDetailModel;
use App\Models\ContactUsModel;
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
use App\Models\AdvocacyCommonModel1;
use App\Models\OpportunitiesModel;
use App\Models\AdvocacyCommonModel;
use App\Models\PartnersModel;
use App\Models\PartnerSponsorPageTitleModel;
use App\Models\PartnerCommonSection1;
use App\Models\PartnerCommonSection2;
use App\Models\FinancialCommonModel;
use App\Models\FinancialCommonModel1;

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
        $banner = PageBanner::where('type',1)->first();
        $section1 = AboutPage::where('section',1)->first();
        $section2 = AboutPage::where('section',2)->first();
        $section3 = AboutPage::where('section',3)->first();
        return view('web.pages.about',get_defined_vars());
    }

    public function benefits(){
        $banner = PageBanner::where('type',7)->first();
        $section1 = BenefitsModel::where('type',1)->with('details')->first();
        $section2 = BenefitsModel::where('type',2)->with('details')->first();
        return view('web.pages.benefits',get_defined_vars());
    }

    public function contactUs(){
        $banner = PageBanner::where('type',4)->first();
        $contact = ContactUsModel::first();
        return view('web.pages.contact_us',get_defined_vars());
    }

    public function blog(){
        $banner = PageBanner::where('type',28)->first();
        $blogs = MyBlog::all();
        return view('web.pages.blog',get_defined_vars());
    }
    public function events(){
        $banner = PageBanner::where('type',24)->first();
        $section1 = EventModel::where('section',1)->first();
        $section3 = EventModel::where('section',3)->first();
        $events = OurEventModel::all();
        return view('web.pages.events',get_defined_vars());
    }

    public function evaluation(){
        $banner = PageBanner::where('type',9)->first();
        $section1 = MembershipCommonModel::where(['page'=>'evaluation','section'=>1])->first();
        $section3 = MembershipCommonModel::where(['page'=>'evaluation','section'=>3])->first();
        $section4 = MembershipCommonModel::where(['page'=>'evaluation','section'=>4])->first();
        $section5 = MembershipCommonModel::where(['page'=>'evaluation','section'=>5])->first();
        return view('web.pages.evaluation',get_defined_vars());
    }

    public function rules_of_engagement(){
        $banner = PageBanner::where('type',10)->first();
        $section1 = MembershipCommonModel::where(['section'=>1,'page'=>'roe'])->first();
        $section2 = RulesOfEngagementModel::get();
        return view('web.pages.rules_of_engagement',get_defined_vars());
    }

    public function sectors(){
        $banner = PageBanner::where('type', 11)->first();
        $sectors = SectorModel::get();
        return view('web.pages.sectors',get_defined_vars());
    }
    public function construction(){
        $banner = PageBanner::where('type', 12)->first();
        $section1 = SectorCommonSection1::where('type',1)->first();
        $section2 = SectorCommonSection2::where('type',1)->first();
        return view('web.pages.construction',get_defined_vars());
    }
    public function agriculture(){
        $banner = PageBanner::where('type', 13)->first();
        $section1 = SectorCommonSection1::where('type',2)->first();
        $section2 = SectorCommonSection2::where('type',2)->first();
        return view('web.pages.agriculture',get_defined_vars());
    }
    public function supply_chain(){
        $banner = PageBanner::where('type', 14)->first();
        $section1 = SectorCommonSection1::where('type',3)->first();
        $section2 = SectorCommonSection2::where('type',3)->first();
        return view('web.pages.supply_chain',get_defined_vars());
    }
    public function technology(){
        $banner = PageBanner::where('type', 15)->first();
        $section1 = SectorCommonSection1::where('type',4)->first();
        $section2 = SectorCommonSection2::where('type',4)->first();
        return view('web.pages.technology',get_defined_vars());
    }
    public function natural_resources(){
        $banner = PageBanner::where('type', 16)->first();
        $section1 = SectorCommonSection1::where('type',5)->first();
        $section2 = SectorCommonSection2::where('type',5)->first();
        return view('web.pages.natural_resources',get_defined_vars());
    }
    public function energy(){
        $banner = PageBanner::where('type', 17)->first();
        $section1 = SectorCommonSection1::where('type',6)->first();
        $section2 = SectorCommonSection2::where('type',6)->first();
        return view('web.pages.energy',get_defined_vars());
    }
    public function textiles(){
        $banner = PageBanner::where('type', 18)->first();
        $section1 = SectorCommonSection1::where('type',7)->first();
        $section2 = SectorCommonSection2::where('type',7)->first();
        return view('web.pages.textiles',get_defined_vars());
    }
    public function advocacy(){
        $banner = PageBanner::where('type',19)->first();
        $section1 = AdvocacyCommonModel::where(['page'=>'advocacy','section'=>1])->first();
        $section2 = AdvocacyCommonModel1::where(['page'=>'advocacy','section'=>2])->get();
        $section3 = AdvocacyCommonModel1::where(['page'=>'advocacy','section'=>3])->get();
        $section4 = AdvocacyCommonModel1::where(['page'=>'advocacy','section'=>4])->get();
        return view('web.pages.advocacy',get_defined_vars());
    }
    public function small_businesses(){
        $banner = PageBanner::where('type',20)->first();
        $section1 = AdvocacyCommonModel::where(['page'=>'small_business','section'=>1])->first();
        $section2 = AdvocacyCommonModel::where(['page'=>'small_business','section'=>2])->first();
        $section3 = AdvocacyCommonModel::where(['page'=>'small_business','section'=>3])->first();
        $section4 = AdvocacyCommonModel::where(['page'=>'small_business','section'=>4])->first();
        $section5 = AdvocacyCommonModel::where(['page'=>'small_business','section'=>5])->first();
        return view('web.pages.small_businesses',get_defined_vars());
    }
    public function women(){
        $banner = PageBanner::where('type',21)->first();
        $section1 = AdvocacyCommonModel::where(['page'=>'women','section'=>1])->first();
        $section2 = AdvocacyCommonModel1::where(['page'=>'women','section'=>2])->get();
        $section3 = AdvocacyCommonModel::where(['page'=>'women','section'=>3])->first();
        $section4 = AdvocacyCommonModel::where(['page'=>'women','section'=>4])->first();
        $section5 = AdvocacyCommonModel::where(['page'=>'women','section'=>5])->first();
        $section6 = AdvocacyCommonModel::where(['page'=>'women','section'=>6])->first();
        return view('web.pages.women',get_defined_vars());
    }
    public function veterans(){
        $banner = PageBanner::where('type',22)->first();
        $section1 = AdvocacyCommonModel::where(['page'=>'veterans','section'=>1])->first();
        $section2 = AdvocacyCommonModel1::where(['page'=>'veterans','section'=>2])->get();
        $section3 = AdvocacyCommonModel::where(['page'=>'veterans','section'=>3])->first();
        return view('web.pages.veterans',get_defined_vars());
    }
    public function support_services(){
        $banner = PageBanner::where('type',23)->first();
        $section1 = AdvocacyCommonModel::where(['page'=>'support_services','section'=>1])->first();
        $section2 = AdvocacyCommonModel1::where(['page'=>'support_services','section'=>2])->get();
        $section3 = AdvocacyCommonModel::where(['page'=>'support_services','section'=>3])->first();
        return view('web.pages.support_services',get_defined_vars());
    }
    public function international_events(){
        $banner = PageBanner::where('type', 27)->first();
        $events = InternationalEvent::get();
        $widget = CommonEventSection::first();
        return view('web.pages.international_events',get_defined_vars());
    }
    public function event_request(){
        $banner = PageBanner::where('type', 26)->first();
        return view('web.pages.event_request',get_defined_vars());
    }
    public function event_calendar(){
        $banner = PageBanner::where('type', 25)->first();
        $widget = CommonEventSection::first();
        $items = OurEventCalenderModel::get();
        return view('web.pages.event_calendar',get_defined_vars());
    }

    public function financial(){
        $banner = PageBanner::where('type', 29)->first();
        $section1 = FinancialCommonModel1::where(['page'=>'financial','section'=>1])->get();
        $section2 = FinancialCommonModel::where(['page'=>'financial','section'=>2])->first();
        $section3 = FinancialCommonModel1::where(['page'=>'financial','section'=>3])->get();
        return view('web.pages.financial',get_defined_vars());
    }

    public function grants(){
        $banner = PageBanner::where('type', 30)->first();
        $section1 = FinancialCommonModel::where(['page'=>'grants','section'=>1])->first();
        $section2 = FinancialCommonModel1::where(['page'=>'grants','section'=>2])->get();
        return view('web.pages.grants',get_defined_vars());
    }
    public function funding(){
        $banner = PageBanner::where('type', 31)->first();
        $section1 = FinancialCommonModel::where(['page'=>'funding','section'=>1])->first();
        $section2 = FinancialCommonModel1::where(['page'=>'funding','section'=>2])->get();
        return view('web.pages.funding',get_defined_vars());
    }
    public function partners_sponsors(){
        $banner = PageBanner::where('type', 32)->first();
        $section1 = PartnersModel::where('section',1)->get();
        $title1 = PartnerSponsorPageTitleModel::where(['page'=>'partners_sponsors','section'=>1])->first();
        $section2 = PartnersModel::where('section',2)->get();
        $title2 = PartnerSponsorPageTitleModel::where(['page'=>'partners_sponsors','section'=>2])->first();
        return view('web.pages.partners_sponsors',get_defined_vars());
    }
    public function become_partner(){
        $banner = PageBanner::where('type', 33)->first();
        $section1 = PartnerCommonSection1::where(['section'=>1,'page'=>'become_partner'])->first();
        $section1s = PartnerCommonSection2::where(['section'=>1,'page'=>'become_partner'])->get();
        $section2 = PartnerCommonSection1::where(['section'=>2,'page'=>'become_partner'])->first();
        $title = PartnerSponsorPageTitleModel::where(['page'=>'become_partner','section'=>3])->first();
        $section3 = PartnerCommonSection2::where(['section'=>3,'page'=>'become_partner'])->get();
        $partners = PartnersModel::where('section',1)->get();
        return view('web.pages.become_partner',get_defined_vars());
    }
    public function become_sponsor(){
        $banner = PageBanner::where('type', 34)->first();
        $section1 = PartnerCommonSection1::where(['section'=>1,'page'=>'become_sponsor'])->first();
        $title = PartnerSponsorPageTitleModel::where(['page'=>'become_sponsor','section'=>2])->first();
        $section2 = PartnerCommonSection2::where(['section'=>2,'page'=>'become_sponsor'])->get();
        $partners = PartnersModel::where('section',2)->get();
        return view('web.pages.become_sponsor',get_defined_vars());
    }
    public function outreach(){
        $banner = PageBanner::where('type', 35)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'outreach','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'outreach','section'=>2])->first();
        $section3 = OutreachCommonSectionModel::where(['page'=>'outreach','section'=>3])->first();
        return view('web.pages.outreach',get_defined_vars());
    }
    public function chad(){
        $banner = PageBanner::where('type', 36)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'chad','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'chad','section'=>2])->first();
        return view('web.pages.chad',get_defined_vars());
    }
    public function ghana(){
        $banner = PageBanner::where('type', 37)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'ghana','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'ghana','section'=>2])->first();
        return view('web.pages.ghana',get_defined_vars());
    }
    public function south_africa(){
        $banner = PageBanner::where('type', 38)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'southafrica','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'southafrica','section'=>2])->first();
        return view('web.pages.south_africa',get_defined_vars());
    }
    public function zimbabwe(){
        $banner = PageBanner::where('type', 39)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'zimbabwe','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'zimbabwe','section'=>2])->first();
        return view('web.pages.zimbabwe',get_defined_vars());
    }
    public function cameroon(){
        $banner = PageBanner::where('type', 40)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'cameroon','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'cameroon','section'=>2])->first();
        return view('web.pages.cameroon',get_defined_vars());
    }
    public function drc(){
        $banner = PageBanner::where('type', 41)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'drc','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'drc','section'=>2])->first();
        return view('web.pages.drc',get_defined_vars());
    }
    public function cote_divoire(){
        $banner = PageBanner::where('type', 42)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'cotedivoire','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'cotedivoire','section'=>2])->first();
        return view('web.pages.cote_divoire',get_defined_vars());
    }
    public function usa(){
        $banner = PageBanner::where('type', 43)->first();
        $section1 = OutreachCommonSectionModel::where(['page'=>'usa','section'=>1])->first();
        $section2 = OutreachCommonSectionModel::where(['page'=>'usa','section'=>2])->first();
        return view('web.pages.usa',get_defined_vars());
    }
    public function opportunities(){
        $banner = PageBanner::where('type',44)->first();
        $section1 = OpportunitiesModel::where(['section'=>1,'page'=>'oppor'])->first();
        $section2 = OpportunitiesModel::where(['section'=>1,'page'=>'oppor'])->first();
        return view('web.pages.opportunities',get_defined_vars());
    }
    public function opportunities_agriculture(){
        $banner = PageBanner::where('type',45)->first();
        $section1 = OpportunitiesModel::where(['section'=>1,'page'=>'agri'])->first();
        $section2 = OpportunitiesModel::where(['section'=>1,'page'=>'agri'])->first();
        return view('web.pages.opportunities_agriculture',get_defined_vars());
    }
    public function opportunities_construction(){
        $banner = PageBanner::where('type',46)->first();
        $section1 = OpportunitiesModel::where(['section'=>1,'page'=>'cons'])->first();
        $section2 = OpportunitiesModel::where(['section'=>1,'page'=>'cons'])->first();
        return view('web.pages.opportunities_construction',get_defined_vars());
    }
    public function mining(){
        $banner = PageBanner::where('type',47)->first();
        $section1 = OpportunitiesModel::where(['section'=>1,'page'=>'mining'])->first();
        $section2 = OpportunitiesModel::where(['section'=>1,'page'=>'mining'])->first();
        return view('web.pages.mining',get_defined_vars());
    }
    public function rfx(){
        $banner = PageBanner::where('type',48)->first();
        $section1 = OpportunitiesModel::where(['section'=>1,'page'=>'rfx'])->first();
        $section2 = OpportunitiesModel::where(['section'=>1,'page'=>'rfx'])->first();
        return view('web.pages.rfx',get_defined_vars());
    }
    public function job_openings(){
        return view('web.pages.job_openings',get_defined_vars());
    }
    public function careers(){
        return view('web.pages.careers',get_defined_vars());
    }
    public function join(){
        $banner = PageBanner::where('type',6)->first();
        $joins =  Membership_Level::all();
        return view('web.pages.join',get_defined_vars());
    }
    public function membership(){
        $banner = PageBanner::where('type',5)->first();
        $section1 = MembershipCommonModel::where(['page'=>'membership','section'=>1])->first();
        $section2 = MembershipSection2::get();
        $section3 = MembershipCommonModel::where(['page'=>'membership','section'=>3])->first();
        return view('web.pages.membership',get_defined_vars());
    }

    public function programs(){
        $banner = PageBanner::where('type',8)->first();
        $section1 = ProgramSection1::first();
        $section2 = ProgramSection2::get();
        return view('web.pages.programs',get_defined_vars());
    }

    public function team(){
        $banner = PageBanner::where('type',3)->first();
        $executiveMembers = OurTeam::where('type', 1)->get();
        $staffMembers = OurTeam::where('type', 2)->get();
        return view('web.pages.team',get_defined_vars());
    }

    public function whoweare(){
        $banner = PageBanner::where('type',2)->first();
        $section4 = AboutPage::where('section',4)->first();
        $section5 = AboutPage::where('section',5)->first();
        $section6 = HomeSection3::first();
        return view('web.pages.whoweare',get_defined_vars());
    }
}
