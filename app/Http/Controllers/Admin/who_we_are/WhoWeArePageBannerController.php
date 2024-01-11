<?php

namespace App\Http\Controllers\Admin\who_we_are;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutPageBanner;

class WhoWeArePageBannerController extends Controller
{
    public function index(){
        $AboutBanner = AboutPageBanner::where('type', 2)->first() ?? [];

        return view('admin.pages.who_we_are.banner.index', ['WhoWeAreBanner' => $AboutBanner]);
    }
    public function updateBanner(Request $request){
        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $path = $file->store('public/images');

            $filename = basename($path);
        }

        AboutPageBanner::where('type', 2)->update([
            'pagename' => $request->input('pagename'),
            'image_path' => $request->hasFile('banner') ? 'storage/images/' . $filename : $request->previousImage,
            'type' => $request->input('who_we_are_pageType'),
        ]);

        return redirect()->back()->with('success', 'Record(s) updated successfully!');
    }
}
