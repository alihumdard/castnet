<?php

namespace App\Http\Controllers\Admin\programs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\ProgramSection1;

class ProgramsSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',8)->first();
        $page = "Programs";
        return view('admin.pages.banner',compact('banner','page'));
    }
    public function updateSection1(Request $request, $id)
    {
        $request->validate([
            'title' => 'string|max:255',
            'description' => 'string',
            // Add more validation rules as needed
        ]);

        // Find the record by ID
        $section1 = ProgramSection1::findOrFail($id);

        // Update the record with the new data
        $section1->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        // Redirect back or to another route after successful update
        return redirect()->back()->with('success', 'Section updated successfully');
    }
}
