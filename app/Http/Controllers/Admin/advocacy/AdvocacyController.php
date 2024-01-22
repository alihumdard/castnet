<?php

namespace App\Http\Controllers\Admin\advocacy;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdvocacyCommonModel;

class AdvocacyController extends Controller
{
    public function section1(){

        $section = AdvocacyCommonModel::where('section',1)->first();
        $title = "Advocacy";
        return view('admin.pages.advocacy.section1.index', compact('section','title'));
    }

    public function updation(Request $request,$id){
        $advocacy = AdvocacyCommonModel::findOrFail($id);
        if ($advocacy == null) {
            return redirect()->back()->with('error', 'No records were found for creating.');
        }
        if($advocacy->page=='Advocacy' && $advocacy->section==1){
            $route = "advocacy.section1";
        }
        // elseif($membership->page=='membership' && $membership->section==3){
        //     $route = "membership.section3";
        // }elseif($membership->page=='evaluation' && $membership->section==1){
        //     $route = "evaluation.section";
        // }elseif($membership->page=='evaluation' && $membership->section==3){
        //     $route = "evaluation.section3";
        // }elseif($membership->page=='evaluation' && $membership->section==4){
        //     $route = "evaluation.section4";
        // }elseif($membership->page=='evaluation' && $membership->section==5){
        //     $route = "evaluation.section5";
        // }elseif($membership->page=='roe' && $membership->section==1){
        //     $route = "roe.section1";
        // }

        if($request->image){
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/web/images'), $file);
        }else{
            $file = $advocacy->image;
        }
        $data = [
            'title' => $request->title,
            'image' => $file,
            'description' => $request->description,
        ];
        $advocacy->update($data);

        return redirect()->route($route)->with('success', "Data Updated Successfully");
    }

}
