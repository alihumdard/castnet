<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    public function index()
    {
        return view('admin.pages.dashboard');
    }

}

