<?php

namespace App\Http\Controllers\Admin\advocacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class AdvocacySection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',19)->first();
        return view('admin.pages.advocacy.banner.index',compact('banner'));
    }
}
