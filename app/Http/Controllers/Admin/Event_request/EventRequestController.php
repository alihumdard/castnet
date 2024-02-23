<?php

namespace App\Http\Controllers\Admin\Event_request;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\CompanyInfoFormSetting;
use App\Models\PartnerSponsorPageTitleModel;
class EventRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function banner(){
        $banner = PageBanner::where('type',26)->first();
        return view('admin.pages.banner',compact('banner'));
    } 

    public function index()
    {
        $title = PartnerSponsorPageTitleModel::where(['page'=>'event_request','section'=>1])->first();
        $eventCategory = CompanyInfoFormSetting::where('type', 'event_category')->get();
        return view('admin.pages.event_request.index',compact('title','eventCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        CompanyInfoFormSetting::create([
            'dropdowns'=>$request->title,
            'type'=>'event_category',
        ]);
        return redirect()->route('event_request.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = CompanyInfoFormSetting::find($id);
        return response()->json(array(
            'data' => true,
            'title' => $category->dropdowns,
            'id' => $category->id,
            'status' => 'success',
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateCategory(Request $request, $id)
    {
        $title = PartnerSponsorPageTitleModel::findOrFail($id);
        $data = [
            'title' => $request->title,
        ];
        $title->update($data);

        return redirect()->route('event_request.index')->with('success', "Title Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CompanyInfoFormSetting::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Data deleted successfully.',
            'status' => 'success',
        ));
    }
    
    public function updation(Request $request,$id){
        $title = CompanyInfoFormSetting::findOrFail($id);
        $data = [
            'dropdowns' => $request->title,
        ];
        $title->update($data);
        return response()->json(array(
            'data' => true,
            'message' => 'Dropdown value updated successfully.',
            'status' => 'success',
        ));
    }
}
