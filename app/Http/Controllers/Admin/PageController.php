<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dotlogics\Grapesjs\App\Traits\EditorTrait;

class PageController extends Controller
{
    use EditorTrait;
    public function editor(Request $request,$id)
    {
                $page = Page::find($id);
                // dd($page);
        return $this->show_gjs_editor($request, $page);
    }


}

