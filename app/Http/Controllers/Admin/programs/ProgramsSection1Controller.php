<?php

namespace App\Http\Controllers\Admin\programs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class ProgramsSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',8)->first();
        $page = "Programs";
        return view('admin.pages.banner',compact('banner','page'));
    }
}
