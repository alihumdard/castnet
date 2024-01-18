<?php

namespace App\Http\Controllers\Admin\small_businesses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class SmallBusinessesSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',20)->first();
        $page = "Small Businesses";
        return view('admin.pages.banner',compact('banner','page'));
    }
}
