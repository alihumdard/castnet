<?php

namespace App\Http\Controllers\Admin\veterans;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class VeteransSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',22)->first();
        return view('admin.pages.veterans.banner.index',compact('banner'));
    }
}
