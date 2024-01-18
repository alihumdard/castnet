<?php

namespace App\Http\Controllers\Admin\benefits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\benefits_pagetop_section;

class BenefitsSection1Controller extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',7)->first();
        $page = "Benefits";
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
        $section1 = benefits_pagetop_section::findOrFail($id);

        // Update the record with the new data
        $section1->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        // Redirect back or to another route after successful update
        return redirect()->back()->with('success', 'Section updated successfully');
    }
}
