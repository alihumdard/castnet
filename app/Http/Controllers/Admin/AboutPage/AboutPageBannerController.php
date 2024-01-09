<?php

namespace App\Http\Controllers\Admin\AboutPage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutPageBannerController extends Controller
{
    public function index(){
        return view('admin.pages.about_page.banner.index');
    }
}
