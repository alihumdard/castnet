<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\SocialLinks;
use App\Models\Banner;
use App\Models\HomeSection2;


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
    public function heroBanner()
    {
        $record = Banner::first();
        return view('admin.pages.banner', ['record' => $record]);
    }
    
    
    public function homesection1()
    {
        return view('admin.pages.homesection1');
    }
    public function homesection2()
    {
        $data= HomeSection2::first();
      
        if (!$data) {
            $data = []; 
        }
        // dd($data);
        return view('admin.pages.homesection2', compact('data'));
    }



    public function createHomeSection1()
    {
        return view('admin.pages.createHomeSection1');
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
    $recordExists = SocialLinks::exists();

    if ($recordExists) {
        $record = SocialLinks::first()->toArray();
    } else {
        $record = null;
    }

    return view('admin.pages.social_links', ['record' => $record]);
    }
}

