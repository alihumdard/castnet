<?php

namespace App\Http\Controllers\Admin\join;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPage;
use App\Models\PageBanner;

class JoinSection1Controller extends Controller
{

    public function banner(){
        $banner = PageBanner::where('type',6)->first();
        return view('admin.pages.join.banner',compact('banner'));
    }
}
