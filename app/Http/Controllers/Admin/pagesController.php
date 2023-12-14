<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }
    public function principle()
    {
        return view('admin.pages.principles');
    }
    public function setting()
    {
        return view('admin.pages.setting');
    }
}

