<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
        return view('admin.pages.setting', compact('setting'));
    }

    public function update(Request $request,$id){
        $setting = Setting::findOrFail($id);
        if ($setting == null) {
            return redirect()->back()->with('error', 'No records were found for editing.');
        }
        if($request->header_logo){
            $header_logo = time().'.'.$request->header_logo->extension();
            $request->header_logo->move(public_path('assets/web/images'), $header_logo);
        }else{
            $header_logo = $setting->header_logo;
        }
        if($request->popup_logo){
            $popup_logo = time().'.'.$request->popup_logo->extension();
            $request->popup_logo->move(public_path('assets/web/images'), $popup_logo);
        }
        else{
            $popup_logo = $setting->popup_logo;
        }
        if($request->footer_logo){
            $footer_logo = time().'.'.$request->footer_logo->extension();
            $request->footer_logo->move(public_path('assets/web/images'), $footer_logo);
        }
        else{
            $footer_logo = $setting->footer_logo;
        }

        $data = [
            'title' => $request->title,
            'header_logo' => $header_logo,
            'popup_logo' => $popup_logo,
            'popup_description' => $request->description,
            'footer_description' => $request->footerDescription,
            'footer_logo' => $footer_logo,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
        ];
        $setting->update($data);
        return redirect()->route('admin.setting')->with('success', 'Website setting updated successfully.');
    }
}
