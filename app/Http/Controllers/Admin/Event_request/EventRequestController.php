<?php

namespace App\Http\Controllers\Admin\Event_request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\PartnerSponsorPageTitleModel;
class EventRequestController extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',26)->first();
        return view('admin.pages.banner',compact('banner'));
    }

    public function index(){
        $title = PartnerSponsorPageTitleModel::where(['page'=>'event_request','section'=>1])->first();
        return view('admin.pages.event_request.index',compact('title'));
    }
    
    public function update(Request $request,$id){
        $title = PartnerSponsorPageTitleModel::findOrFail($id);
        $data = [
            'title' => $request->title,
        ];
        $title->update($data);

        return redirect()->route('event-request.section')->with('success', "Title Updated Successfully");
    }
}
