<?php

namespace App\Http\Controllers\Admin\small_businesses;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvocacyCommonModel;

class SmallBusinessController extends Controller
{
    public function section1(){
        $section = AdvocacyCommonModel::where(['section'=>1,'page'=>'smallBusiness'])->first();
        $page = "Small Business";
        $sn = "Section 1";
        return view('admin.pages.small_businesses.common_section',get_defined_vars());
    }
    public function section2(){
        $section = AdvocacyCommonModel::where(['section'=>2,'page'=>'smallBusiness'])->first();
        $page = "Small Business";
        $sn = "Section 2";
        return view('admin.pages.small_businesses.common_section',get_defined_vars());
    }
    public function section3(){
        $section = AdvocacyCommonModel::where(['section'=>3,'page'=>'smallBusiness'])->first();
        $page = "Small Business";
        $sn = "Section 3";
        return view('admin.pages.small_businesses.common_section',get_defined_vars());
    }
    public function section4(){
        $section = AdvocacyCommonModel::where(['section'=>4,'page'=>'smallBusiness'])->first();
        $page = "Small Business";
        $sn = "Section 4";
        return view('admin.pages.small_businesses.common_section',get_defined_vars());
    }
    public function section5(){
        $section = AdvocacyCommonModel::where(['section'=>5,'page'=>'smallBusiness'])->first();
        $page = "Small Business";
        $sn = "Section 5";
        return view('admin.pages.small_businesses.common_section',get_defined_vars());
    }
    public function updation(Request $request,$id){
        $membership = AdvocacyCommonModel::findOrFail($id);
        if ($membership == null) {
            return redirect()->back()->with('error', 'No records were found for creating.');
        }
        if($membership->page=='smallBusiness' && $membership->section==1){
            $route = "smallBusiness.section1";
        }elseif($membership->page=='smallBusiness' && $membership->section==2){
            $route = "smallBusiness.section2";
        }elseif($membership->page=='smallBusiness' && $membership->section==3){
            $route = "smallBusiness.section3";
        }elseif($membership->page=='smallBusiness' && $membership->section==4){
            $route = "smallBusiness.section4";
        }elseif($membership->page=='smallBusiness' && $membership->section==5){
            $route = "smallBusiness.section5";
        }

        if($request->image){
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/web/images'), $file);
        }else{
            $file = $membership->image;
        }
        $data = [
            'title' => $request->title,
            'image' => $file,
            'description' => $request->description,
        ];
        $membership->update($data);

        return redirect()->route($route)->with('success', "Data Updated Successfully");
    }
}
