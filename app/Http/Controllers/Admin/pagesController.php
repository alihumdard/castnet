<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;

class pagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }

    public function allpages()
    {
        return view('admin.pages.allpages');
    }

    public function addpage()
    {
        return view('admin.pages.addpage');
    }

    public function setting()
    {
        $settings = Setting::all()->toArray();
        // dd($settings);
        // return view('admin.pages.setting');
        return view('admin.pages.setting', compact('settings'));
    }

    public function sociallinks()
    {
        return view('admin.pages.social_links');
    }
}

