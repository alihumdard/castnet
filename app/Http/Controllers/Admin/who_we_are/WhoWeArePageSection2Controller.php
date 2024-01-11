<?php

namespace App\Http\Controllers\Admin\who_we_are;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_Page_Section;

class WhoWeArePageSection2Controller extends Controller
{
    public function index()
    {
        $section5Record = About_Page_Section::where('sectionname', 'section5')->first();

        return view('admin.pages.who_we_are.section2.index', compact('section5Record'));
    }
    public function updateSection2(Request $request){

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $path = $file->store('public/images');

            $filename = basename($path);
        }

        About_Page_Section::where('sectionname', 'section5')->update([
            'image' => $request->hasFile('banner')?'storage/images/' . $filename : $request->previousImage,
            'description' => $request->input('description'),
            'sectionname' => 'section5',
        ]);

        return redirect()->back()->with('success', 'Record(s) updated successfully!');
    }
}
