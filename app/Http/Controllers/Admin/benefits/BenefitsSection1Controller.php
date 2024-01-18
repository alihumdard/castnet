<?php

namespace App\Http\Controllers\Admin\benefits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class BenefitsSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',7)->first();
        $page = "Benefits";
        return view('admin.pages.banner',compact('banner','page'));
    }
}
