<?php

namespace App\Http\Controllers\Admin\AboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_Page_Section;

class AboutPageSection2Controller extends Controller
{
    public function index()
    {
        $section2Record = About_Page_Section::where('sectionname', 'section2')->first();

        return view('admin.pages.about_page.section2.index', compact('section2Record'));
    }

    public function updateSection2(Request $request){

        if ($request->hasFile('banner')) {
            $file = $request->file('banner');
            $path = $file->store('public/images');

            $filename = basename($path);
        }

        About_Page_Section::where('sectionname', 'section2')->update([
            'image' => $request->hasFile('banner')?'storage/images/' . $filename : $request->previousImage,
            'description' => $request->input('description'),
            'sectionname' => 'section2',
        ]);

        return redirect()->back()->with('success', 'Record(s) updated successfully!');
    }
}
