<?php

namespace App\Http\Controllers\Admin\benefits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class BenefitsSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',7)->first();
        return view('admin.pages.benefits.banner.index',compact('banner'));
    }
}
