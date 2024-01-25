<?php

namespace App\Http\Controllers\Admin\Oppor_rfx;

use App\Http\Controllers\Controller;
use App\Models\OpportunitiesModel;
use Illuminate\Http\Request;
use App\Models\PageBanner;

class OpporRfxController extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',48)->first();
        $page = "Rfx";
        return view('admin.pages.banner',compact('banner','page'));
    }

    public function section1(){
        $section = OpportunitiesModel::where(['section'=>1,'page'=>'rfx'])->first();
        $page = "Rfx";
        $sn = "Section 1";
        return view('admin.pages.oppotunities.index',get_defined_vars());
    }

    public function section2(){
        $section = OpportunitiesModel::where(['page'=>'rfx','section'=>2])->first();
        $page = "Rfx";
        $sn = "Section 2";
        return view('admin.pages.oppotunities.index',get_defined_vars());
    }
}
