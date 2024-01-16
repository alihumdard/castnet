<?php

namespace App\Http\Controllers\Admin\membership;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class MembershipSection1Controller extends Controller
{
    public function section1()
    {
        $section = AboutPage::where('section',6)->first();
        return view('admin.pages.membershipSubPage1', compact('section'));
    }
}
