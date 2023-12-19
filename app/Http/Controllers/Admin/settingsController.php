<?php
// app/Http/Controllers/Admin/SettingsController.php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function uploadLargeLogo(Request $request)
    {
  
        $request->validate([
            'largelogo' => 'image|mimes:jpg,jpeg,png|max:2048|dimensions:width=220,height=220',
        ]);        

        if ($request->hasFile('largelogo')) {
            $oldImagePath = Setting::where('type', 'large_logo')->value('img_url');
      
            $imagePath = $request->file('largelogo')->store('logos', 'public');


           $setting= Setting::updateOrCreate(
                ['type' => 'large_logo'], 
                [
                    'section' => 'logo',
                    'img_url' => $imagePath,
                    'type' => 'large_logo',
                ]
            );

            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }
            $message = $setting->wasRecentlyCreated ? 'Small Logo Successfully Created.' : 'Small Logo Successfully Updated.';

            return redirect()->route('admin.setting')->with('success', $message);

        }


        return redirect()->back()->with('error', 'No image provided.');
    }

    public function uploadMediumLogo(Request $request)
    {

        $request->validate([
            'mediumlogo' => 'image|mimes:jpg,jpeg,png|max:2048|dimensions:width=140,height=140',
        ]);


        if ($request->hasFile('mediumlogo')) {

            $oldImagePath = Setting::where('type', 'medium_logo')->value('img_url');


            $imagePath = $request->file('mediumlogo')->store('logos', 'public');

      
            $setting = Setting::updateOrCreate(
                ['type' => 'medium_logo'], 
                [
                    'section' => 'logo',
                    'img_url' => $imagePath,
                    'type' => 'medium_logo',
                ]
            );


            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }
            
            $message = $setting->wasRecentlyCreated ? 'Small Logo Successfully Created.' : 'Small Logo Successfully Updated.';

            return redirect()->route('admin.setting')->with('success', $message);
        }
        return redirect()->back()->with('error', 'No image provided.');
    }
    public function uploadSmallLogo(Request $request)
    {

        $request->validate([
            'smalllogo' => 'image|mimes:jpg,jpeg,png|max:2048|dimensions:width=110,height=110',
        ]);

        if ($request->hasFile('smalllogo')) {

            $oldImagePath = Setting::where('type', 'small_logo')->value('img_url');

            
            $imagePath = $request->file('smalllogo')->store('logos', 'public');

        
            $setting = Setting::updateOrCreate(
                ['type' => 'small_logo'], 
                [
                    'section' => 'logo',
                    'img_url' => $imagePath,
                    'type' => 'small_logo',
                ]
            );


            if ($oldImagePath && Storage::disk('public')->exists($oldImagePath)) {
                Storage::disk('public')->delete($oldImagePath);
            }

            $message = $setting->wasRecentlyCreated ? 'Small Logo Successfully Created.' : 'Small Logo Successfully Updated.';

            return redirect()->route('admin.setting')->with('success', $message);
        }
   
        return redirect()->back()->with('error', 'No image provided.');
    }
    public function uploadSocialMediaInfo(Request $request)
    {
 
        $request->validate([
            'section' => 'required|string',
            'type' => 'required|string',
            'link' => 'required|url',
            'img_url' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $imagePath = $request->file('img_url')->store('social_icons', 'public');

        $setting = Setting::updateOrCreate(
            ['id' => $request->id ?? NULL],
            [
                'section' => $request->section,
                'type'    => $request->type,
                'link'    => $request->link,
                'img_url' => $imagePath,
                'created_by' => Auth::id()
            ]
        );
        $message = $setting->wasRecentlyCreated ? 'Social Link Successfully Created.' : 'Social Link Successfully Updated.';

            return redirect()->route('admin.setting')->with('success', $message);

    }
    
    public function updateImage(Request $request, $id)
    {
        $setting = Setting::find($id);
        $socialMediaData = $setting->toArray();
        // dd($settingArray);\
        return redirect()->route('admin.setting')->with('socialMediaData', $socialMediaData);
    }
}
