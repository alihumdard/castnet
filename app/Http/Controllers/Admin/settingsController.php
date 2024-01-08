<?php
// app/Http/Controllers/Admin/SettingsController.php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\SocialLinks;
use App\Models\Banner;
use App\Models\HomeSection1;
use App\Models\HomeSection2;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


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
    public function destroy($id)
{
    $item = HomeSection1::find($id);

    if (!$item) {
        return redirect()->back()->with('error', 'Item not found.');
    }

    $item->delete();

    return redirect()->back()->with('success', 'Item deleted successfully.');
}




// public function updateHomeSection1($id)
// {
//     $item = HomeSection1::find($id);


//     if (!$item) {
//         return redirect()->back()->with('error', 'Item not found.');
//     }

//     return view('your.edit.view', compact('item'));
// }

public function updateHomeSection1($id)
{
    $item = HomeSection1::find($id);

    if (!$item) {
        return redirect()->back()->with('error', 'Item not found.');
    }

    $additionalData = [
        'update' => 'yes',
    ];

    return view('admin.pages.homesection1', compact('item', 'additionalData'));
}




public function updateHomeSection1Data(Request $request, $id)
{
    $item = HomeSection1::find($id);
    dd($request -> all());
    if (!$item) {
        return redirect()->back()->with('error', 'Item not found.');
    }
    $request->validate([
        'image' => 'image|mimes:jpg,jpeg,png',
        'heading' => 'required|string|max:255',
        'button' => 'required|string|max:255',
        'buttonlink' => 'nullable|url',
        'description' => 'nullable|string',
    ]);

    if ($request->hasFile('image')) {
        $sectionImage = $request->file('image')->store('assets/web/images', 'public');
        $item->image = $sectionImage;
    }


    $item->heading = $request->input('heading');
    $item->button = $request->input('button');
    $item->buttonlink = $request->input('buttonlink');
    $item->description = $request->input('description');


    $item->save();

    return redirect()->back()->with('success', 'Item updated successfully.');
}



    // public function homeSection1(Request $request){
    //     $request->validate([
    //         'image' => 'image|mimes:jpg,jpeg,png',
    //     ]);
    //     $sectionImage = $request->file('image');
    //     $sectionImage = $sectionImage ? $sectionImage->store('assets/web/images', 'public') : '';
    //     $homeSection1 = new HomeSection1();
    //     $homeSection1->image = $sectionImage;
    //     $homeSection1->heading = $request->input('heading');
    //     $homeSection1->description = $request->input('description');
    //     $homeSection1->button = $request->input('button');
    //     $homeSection1->buttonlink = $request->input('buttonlink');
    //     $homeSection1->save();

    //     return redirect()->back()->with('success', 'Comment stored successfully!');
    // }



    public function homeSection2(Request $request)
{
    $request->validate([
        'image' => 'image|mimes:jpg,jpeg,png',
    ]);

    $homesection2 = HomeSection2::first();

    if ($homesection2) {


        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $homesection2->image = $imagePath;
        } else {
            $homesection2->image = $request['old_image'];
        }

        $homesection2->heading = $request['title'];
        $homesection2->button = $request['button'];
        $homesection2->buttonlink = $request['buttonlink'];
        $homesection2->description = $request['description'];

        $homesection2->save();
    } else {
        $homesection2 = new HomeSection2;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $homesection2->image = $imagePath;
        }

        $homesection2->heading = $request['title'];
        $homesection2->button = $request['button'];
        $homesection2->buttonlink = $request['buttonlink'];
        $homesection2->description = $request['description'];

        $homesection2->save();
    }

    return redirect()->back()->with('success', 'Form data saved successfully.');
}


    public function homeSection1(Request $request){
        $request->validate([
            'image' => 'image|mimes:jpg,jpeg,png',
        ]);
        
        $id = $request->input('id');
        
        if ($id) {
            $homeSection1 = HomeSection1::find($id);
            
            if (!$homeSection1) {
                return redirect()->back()->with('error', 'Record not found.');
            }
        } else {
            $homeSection1 = new HomeSection1();
        }
        
        $sectionImage = $request->file('image');
        $homeSection1->image = $sectionImage ? $sectionImage->store('assets/web/images', 'public') : $request->input('old_image');
        $homeSection1->heading = $request->input('heading');
        $homeSection1->description = $request->input('description');
        $homeSection1->button = $request->input('button');
        $homeSection1->buttonlink = $request->input('buttonlink');
        
        $homeSection1->save();
        if ($id) {
            // dd('working');
            // return view('admin.pages.homesection1');
            return redirect()->route('admin.homesection1');
        }
        else {
            return redirect()->back()->with('success', 'Data saved successfully!');
        }
    }
    







    public function homeBannerSetting(Request $request){
        // dd($request->all());
        // dd($request->input('old_banner'));
        $request->validate([
            'banner' => 'image|mimes:jpg,jpeg,png',
            // 'old_banner' => 'image|mimes:jpg,jpeg,png',
        ]);
        $setting = Banner::first();

        if (!$setting) {
            $setting = new Banner();
        }


        $banner = $request->file('banner');

        $bannerPath = $banner ? $banner->store('assets/web/images', 'public') : $request->input('old_banner');

        $setting->banner = $bannerPath;
        $setting->short_heading = $request->input('title');
        $setting->button1 = $request->input('button1');
        $setting->button1link = $request->input('button1link');
        $setting->button2 = $request->input('button2');
        $setting->button2link = $request->input('button2link');
        $setting->heading = $request->input('heading');
        $setting->description = $request->input('description');
        $setting->created_at = Carbon::now();

        $setting->save();

        return redirect()->route('admin.heroBanner')->with('success', 'Settings updated successfully');
    }
public function updateSetting(Request $request)
{
    $request->validate([
        // 'header_logo' => 'image|mimes:jpg,jpeg,png|max:2048|dimensions:width=220,height=220',
        'header_logo' => 'image|mimes:jpg,jpeg,png',
        'popup_logo' => 'image|mimes:jpg,jpeg,png',
        // 'popup_logo' => 'image|mimes:jpg,jpeg,png|max:2048|dimensions:width=220,height=220',
        'footer_logo' => 'image|mimes:jpg,jpeg,png',
        // 'footer_logo' => 'image|mimes:jpg,jpeg,png|max:2048|dimensions:width=220,height=220',
    ]);

    $setting = Setting::first();

    if (!$setting) {
        $setting = new Setting();
    }

    // if ($setting) {
        // Access the form values
        $title = $request->input('title');
        $headerLogo = $request->file('header_logo');
        $popupLogo = $request->file('popup_logo');
        $footerLogo = $request->file('footer_logo');

        $headerLogoPath = $headerLogo ? $headerLogo->store('assets/web/images', 'public') : $request->input('old_header_logo');
        $popupLogoPath = $popupLogo ? $popupLogo->store('assets/web/images', 'public') : $request->input('old_popup_logo');
        $footerLogoPath = $footerLogo ? $footerLogo->store('assets/web/images', 'public') : $request->input('old_footer_logo');

        $setting->title = $title;
        $setting->header_logo = $headerLogoPath;
        $setting->popup_logo = $popupLogoPath;
        $setting->footer_logo = $footerLogoPath;
        $setting->email = $request->input('email');
        $setting->phone = $request->input('phone');
        $setting->address = $request->input('address');
        $setting->created_at = Carbon::now();

        $setting->save();

        return redirect()->route('admin.setting')->with('success', 'Settings updated successfully');
}
public function socialLinksSetting(Request $request){
    $validatedData = $request->validate([
        'facebook'  => 'nullable|url',
        'twitter'   => 'nullable|url',
        'instagram' => 'nullable|url',
        'linkedin'  => 'nullable|url',
        'pintrest' => 'nullable|url',
    ]);
    SocialLinks::updateOrCreate([], $validatedData);
    return redirect()->route('admin.sociallinks')->with('success', 'Settings updated successfully');
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
    
        $imagePath = null;
    
        if ($request->hasFile('img_url')) {
            // If a new file is provided, upload it
            $imagePath = $request->file('img_url')->store('social_icons', 'public');
        } elseif ($request->filled('id')) {
            // If it's an update and no new file is provided, use the existing value
            $existingSetting = Setting::find($request->id);
            $imagePath = $existingSetting->img_url;
        }
    
        $setting = Setting::updateOrCreate(
            ['id' => $request->id ?? null],
            [
                'section' => $request->section,
                'type' => $request->type,
                'link' => $request->link,
                'img_url' => $imagePath,
                'created_by' => Auth::id(),
            ]
        );
    
        $message = $setting->wasRecentlyCreated ? 'Social Link Successfully Created.' : 'Social Link Successfully Updated.';
    
        return redirect()->route('admin.setting')->with('success', $message);
    }
    public function updateImage(Request $request, $id)
    {
        $setting = Setting::find($id);
        $data['socialMediaData'] = $setting->toArray();
     
        return view('admin.pages.setting',$data);
    }
    // ****************************
    public function update(Request $request)
    {
 
        // Validate the request
        $request->validate([
            'type' => 'required',
            'link' => 'required',
            'img_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Example validation for image upload
        ]);

        // Assuming your model has a static method to find or create a record
        $socialMedia = Setting::updateOrCreate(
            ['id' => $request->id], // Update based on the provided ID
            [
                'type' => $request->type,
                'link' => $request->link,
                // handle image upload and storage, e.g., using Laravel's Storage facade
                // 'img_url' => ...
            ]
        );

        // Additional logic if needed

        return redirect()->back()->with('success', 'Record updated successfully.');
    }
}
