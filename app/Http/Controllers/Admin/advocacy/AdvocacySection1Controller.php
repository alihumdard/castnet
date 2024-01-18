<?php

namespace App\Http\Controllers\Admin\advocacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\AboutPage;

class AdvocacySection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',19)->first();
        return view('admin.pages.advocacy.banner.index',compact('banner'));
    }
    public function section1(){

        $section = AboutPage::where('section',12)->first();
        $title = "Advocacy";
        return view('admin.pages.advocacy.section1.index', compact('section','title'));
    }
}
