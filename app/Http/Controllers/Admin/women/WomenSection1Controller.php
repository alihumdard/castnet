<?php

namespace App\Http\Controllers\Admin\women;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class WomenSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',21)->first();
        return view('admin.pages.women.banner.index',compact('banner'));
    }
}
