<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

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
        return view('admin.pages.setting');
    }


}

