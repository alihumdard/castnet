<?php

namespace App\Http\Controllers\Admin\Sectors;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SectorCommonSection2;
class SectorsCommonSection2Controller extends Controller
{
    public function construction(){
        $section2 = SectorCommonSection2::first();
        return view('admin.pages.sectors_common_section2.index',compact('section2'));
    }
}
