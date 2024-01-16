<?php

namespace App\Http\Controllers\Admin\evaluation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;
use App\Models\PageBanner;

class EvaluationSection1Controller extends Controller
{
    public function section1()
    {
        $section = AboutPage::where('section',8)->first();
        $title = "Evaluation 1";
        return view('admin.pages.membership_common_section', compact('section','title'));
    }
    public function section3()
    {
        $section = AboutPage::where('section',9)->first();
        $title = "Evaluation 3";
        return view('admin.pages.membership_common_section', compact('section','title'));
    }

    public function section5()
    {
        $section = AboutPage::where('section',10)->first();
        $title = "Evaluation 5";
        return view('admin.pages.membership_common_section', compact('section','title'));
    }

    public function banner(){
        $banner = PageBanner::where('type',10)->first();
        return view('admin.pages.evaluation.banner',compact('banner'));
    }
}
