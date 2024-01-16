<?php

namespace App\Http\Controllers\Admin\join;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;

class JoinSection1Controller extends Controller
{
    public function section1()
    {
        $section = AboutPage::where('section',7)->first();
        return view('admin.pages.membershipSubPage1', compact('section'));
    }
}
