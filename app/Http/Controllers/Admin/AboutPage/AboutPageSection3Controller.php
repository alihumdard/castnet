<?php

namespace App\Http\Controllers\Admin\AboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_Page_Section;

class AboutPageSection3Controller extends Controller
{
    public function index()
    {
        $section3Record = About_Page_Section::where('sectionname', 'section3')->first();
        return view('admin.pages.about_page.section3.index', compact('section3Record'));
    }

    public function updateSection3(Request $request){

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $path = $file->store('public/images');

            $filename = basename($path);
        }

        About_Page_Section::where('sectionname', 'section3')->update([
            'image' => $request->hasFile('banner')?'storage/images/' . $filename : $request->previousImage,
            'description' => $request->input('description'),
            'sectionname' => 'section3',
        ]);

        return redirect()->back()->with('success', 'Record(s) updated successfully!');
    }
}
