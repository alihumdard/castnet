<?php

namespace App\Http\Controllers\Admin\rules_of_engagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class RulesOfEngagementSection1Controller extends Controller
{
    public function section1($sectionNumber)
    {
        $section = AboutPage::where('section', $sectionNumber)->first();
        return view('admin.pages.membershipSubPage1', compact('section'));
    }
}
