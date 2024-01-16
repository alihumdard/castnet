<?php

namespace App\Http\Controllers\Admin\evaluation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class EvaluationSection1Controller extends Controller
{
    public function section1()
    {
        $section = AboutPage::where('section',8)->first();
        return view('admin.pages.membershipSubPage1', compact('section'));
    }
    public function section3()
    {
        $section = AboutPage::where('section',9)->first();
        return view('admin.pages.membershipSubPage1', compact('section'));
    }

    public function section5($sectionNumber)
    {
        $section = AboutPage::where('section', $sectionNumber)->first();
        return view('admin.pages.membershipSubPage1', compact('section'));
    }
}
