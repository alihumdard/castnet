<?php

namespace App\Http\Controllers\Admin\support_services;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvocacyCommonModel;

class SupportServicesCommon extends Controller
{
    public function section1(){
        $section = AdvocacyCommonModel::where(['section'=>1,'page'=>'supportservices'])->first();
        $page = "Support Services";
        $sn = "Section 1";
        return view('admin.pages.support_services.common_section',get_defined_vars());
    }
    public function section2(){
        $section = AdvocacyCommonModel::where(['section'=>2,'page'=>'supportservices'])->first();
        $page = "Support Services";
        $sn = "Section 2";
        return view('admin.pages.support_services.common_section',get_defined_vars());
    }

    public function updation(Request $request,$id){
        $membership = AdvocacyCommonModel::findOrFail($id);
        if ($membership == null) {
            return redirect()->back()->with('error', 'No records were found for creating.');
        }
        if($membership->page=='supportservices' && $membership->section==1){
            $route = "supportServices.section1";
        }elseif($membership->page=='supportservices' && $membership->section==2){
            $route = "supportServices.section2";
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
