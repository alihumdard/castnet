<?php

namespace App\Http\Controllers\Admin\Event_request;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfoFormSetting;
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
        $eventCategory = CompanyInfoFormSetting::where('type', 'event_category')->get();
        return view('admin.pages.event_request.index',compact('title','eventCategory'));
    }
    
    public function update(Request $request,$id){
        $title = PartnerSponsorPageTitleModel::findOrFail($id);
        $data = [
            'title' => $request->title,
        ];
        $title->update($data);

        return redirect()->route('event-request.section')->with('success', "Title Updated Successfully");
    }

    public function updateCategory(Request $request,$id){
        $title = CompanyInfoFormSetting::findOrFail($id);
        $data = [
            'dropdowns' => $request->title,
        ];
        $title->update($data);

        return redirect()->route('event-request.section')->with('success', "Title Updated Successfully");
    }

    public function create()
    {
        return view('admin.pages.event_request.create');
    }

    public function store(Request $request)
    {
        CompanyInfoFormSetting::create([
            'dropdowns'=>$request->title,
            'type'=>'event_category',
        ]);
        return redirect()->route('event-request.section');
    }

    public function categoryUpdate($id)
    {
        $category = CompanyInfoFormSetting::find($id);
        return view('admin.pages.event_request.edit', compact('category'));
    }

    public function deleteEvent($id){
        CompanyInfoFormSetting::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Data deleted successfully.',
            'status' => 'success',
        ));
    }
}
