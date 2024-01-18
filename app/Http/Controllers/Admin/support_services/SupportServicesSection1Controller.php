<?php

namespace App\Http\Controllers\Admin\support_services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class SupportServicesSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',23)->first();
        $page = "Support Services";
        return view('admin.pages.banner',compact('banner','page'));
    }
}
