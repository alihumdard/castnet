<?php

namespace App\Http\Controllers\Admin\AboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_Page_Section;

class AboutPageSection1Controller extends Controller
{
    public function index()
    {
        $section1Record = About_Page_Section::where('sectionname', 'section1')->first();

        return view('admin.pages.about_page.section1.index', compact('section1Record'));
    }
    public function updateSection1(Request $request){

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $path = $file->store('public/images');

            $filename = basename($path);
        }

        About_Page_Section::where('sectionname', 'section1')->update([
            'image' => $request->hasFile('banner')?'storage/images/' . $filename : $request->previousImage,
            'description' => $request->input('description'),
            'sectionname' => 'section1',
        ]);

        return redirect()->back()->with('success', 'Record(s) updated successfully!');
    }
}
