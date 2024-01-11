<?php

namespace App\Http\Controllers\Admin\AboutPage;

use App\Models\AboutPageBanner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageBannerController extends Controller
{
    public function index(){
        $AboutBanner = AboutPageBanner::where('type', 1)->first() ?? [];

        return view('admin.pages.about_page.banner.index', ['aboutBanner' => $AboutBanner]);
    }
    public function updateBanner(Request $request){
        if ($request->hasFile('bannerImage')) {
            $file = $request->file('bannerImage');
            $path = $file->store('public/images');

            $filename = basename($path);
        }

        AboutPageBanner::where('type', 1)->update([
            'pagename' => $request->input('pagename'),
            'image_path' => $request->hasFile('bannerImage') ? 'storage/images/' . $filename : $request->previousImage,
            'type' => $request->input('aboutPageType'),
        ]);

        return redirect()->back()->with('success', 'Record(s) updated successfully!');
    }
}
