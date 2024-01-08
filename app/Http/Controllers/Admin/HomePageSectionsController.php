<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Principle;

class HomePageSectionsController extends Controller
{
    // Home Section 3 admin and frontend  start
    public function homesection3()
    {
        return view('admin.pages.homesection3');
    }
    public function homesection3data(Request $request)
    {
    $principleData = collect($request->all())->filter(function ($value, $key) {
        return strpos($key, 'principle') === 0;
    })->toArray();

    $jsonData = json_encode($principleData);


    $validatedData = $request->validate([
        'title' => 'required',
        'heading' => 'required',
        'principle' => 'required',
    ]);

    Principle::updateOrCreate(
        ['title' => $validatedData['title'], 'heading' => $validatedData['heading']],
        ['principle' => $jsonData]
    );

    return redirect()->back()->with('success', 'Data saved successfully');
    }
    // Home Section 3 admin and frontend end
}
