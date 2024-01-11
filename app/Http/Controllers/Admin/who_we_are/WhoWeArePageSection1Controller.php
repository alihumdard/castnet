<?php

namespace App\Http\Controllers\Admin\who_we_are;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About_Page_Section;

class WhoWeArePageSection1Controller extends Controller
{
    public function index()
    {
        $section1Record = About_Page_Section::where('sectionname', 'section4')->first();

        return view('admin.pages.who_we_are.section1.index', compact('section1Record'));
    }
    public function updateSection1(Request $request){


        About_Page_Section::where('sectionname', 'section4')->update([
            'image' => '',
            'description' => $request->input('description'),
            'sectionname' => 'section4',
        ]);

        return redirect()->back()->with('success', 'Record(s) updated successfully!');
    }
}
