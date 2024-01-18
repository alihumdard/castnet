<?php

namespace App\Http\Controllers\Admin\rules_of_engagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;
use App\Models\PageBanner;
class RulesOfEngagementSection1Controller extends Controller
{
    public function section1(){
        $section = AboutPage::where('section',11)->first();
        $title = "Rules OF Engagement 1";
        return view('admin.pages.membership_common_section', compact('section','title'));
    }

    public function banner(){
        $banner = PageBanner::where('type',9)->first();
        $page = "Rules Of Engagement";
        return view('admin.pages.banner',compact('banner','page'));
    }
}
