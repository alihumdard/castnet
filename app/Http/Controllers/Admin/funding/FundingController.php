<?php

namespace App\Http\Controllers\Admin\funding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\FinancialCommonModel1;
use App\Models\FinancialCommonModel;

class FundingController extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',31)->first();
        $page = "Funding";
        return view('admin.pages.banner',compact('banner','page'));
    }
    public function section1(){
        $section = FinancialCommonModel::where(['page'=>'funding','section'=>1])->first();
        $page = "Funding";
        $sn = "Section 1";
        return view('admin.pages.financial.common_section',get_defined_vars());
    }
    public function section2(){
        $section = FinancialCommonModel1::where(['page'=>'funding','section'=>2])->get();
        $page = "Funding";
        $sn = "Section 2";
        return view('admin.pages.financial.common_section1',get_defined_vars());
    }
}