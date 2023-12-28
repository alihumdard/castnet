<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class BenefitsController extends Controller
{
    public function index(Request $request)
    {
        $data['largelogo']   = $this->largelogo(); 
        $data['smalllogo']   = $this->smalllogo(); 
        $data['mediumlogo']   = $this->mediumlogo(); 
        $data['socialmedia']   = $this->socialmedia(); 
        return view('web.pages.benefits', $data);
    }
    
    protected function largelogo(){
        $largelogo = Setting::where('type', 'large_logo')->value('img_url');
        if ($largelogo) {
            return asset("storage/$largelogo");
        } else {
            return 'assets/web/images/logo.png';
        }
    }
    protected function mediumlogo(){
        $mediumlogo = Setting::where('type', 'medium_logo')->value('img_url');
        if ($mediumlogo) {
            return asset("storage/$mediumlogo");
        } else {
            return 'assets/web/images/logo.png';
        }
    }
    protected function smalllogo(){
        $smalllogo = Setting::where('type', 'small_logo')->value('img_url');
        if ($smalllogo) {
            return asset("storage/$smalllogo");
        } else {
            return 'assets/web/images/logo.png';
        }
    }
    protected function socialmedia(){
         $socialmedia = Setting::where('section', 'social_links')->get()->toArray();

        return $socialmedia;
        
    }
    
    protected function isValidImageUrl($url)
    {
        return $url && file_exists(public_path($url));
    }
}
