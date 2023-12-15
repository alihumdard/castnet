<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Principle;
use App\Models\RoadMap;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $data['principles'] = $this->principles(3); 
        $data['roadmaps']   = $this->roadmaps(7); 
        return view('web.pages.home', $data);
    }

    protected function principles($limit = NULL){
        $principles = Principle::where(['status' => 'Active'])->take($limit)->latest()->get()->toArray();
        if($principles){
            return $principles;
        }
        return [];
    }

    protected function roadmaps($limit = NULL){
        $principles = RoadMap::where(['status' => 'Active'])->take($limit)->latest()->get()->toArray();
        if($principles){
            return $principles;
        }
        return [];
    }

}
