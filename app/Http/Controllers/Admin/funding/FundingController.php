<?php

namespace App\Http\Controllers\Admin\Funding;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\FinancialCommonModel1;
use App\Models\FinancialCommonModel;
use App\Models\FinancialPayment;

class FundingController extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',31)->first();
        return view('admin.pages.banner',compact('banner'));
    }
    public function forms(){
        $fee = FinancialPayment::first();
        return view('admin.pages.financial.forms',get_defined_vars());
    }
    public function financialPayment(Request $request){

        $fee = FinancialPayment::first();
    
        if($fee){
            $fee->update([
                'investment' => $request->investment,
                'loans' => $request->loans,
                'grants' => $request->grants
            ]);
    
            return redirect()->back()->with('success', 'Record updated successfully');
        } else {
            return redirect()->back()->with('error', 'No record found');
        }
    }
    public function formBanner(){
        $banner = PageBanner::where('type',58)->first();
        return view('admin.pages.banner',compact('banner'));
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
