<?php

namespace App\Http\Controllers\Admin\team;
use App\Models\AboutPageBanner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamPageBannerController extends Controller
{
    public function index(){
        $ourTeamBanner = AboutPageBanner::where('type', 3)->first() ?? [];

        return view('admin.pages.team.banner.index', ['TeamBanner' => $ourTeamBanner]);
    }
    public function updateBanner(Request $request){
        if ($request->hasFile('bannerImage')) {
            $file = $request->file('bannerImage');
            $path = $file->store('public/images');

            $filename = basename($path);
        }

        AboutPageBanner::where('type', 3)->update([
            'pagename' => $request->input('pagename'),
            'image_path' => $request->hasFile('bannerImage') ? 'storage/images/' . $filename : $request->previousImage,
            'type' => $request->input('type'),
        ]);

        return redirect()->back()->with('success', 'Record(s) updated successfully!');
    }
}
