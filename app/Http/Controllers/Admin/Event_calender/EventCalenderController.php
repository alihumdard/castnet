<?php

namespace App\Http\Controllers\Admin\Event_calender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurEventCalenderModel;
use App\Models\PageBanner;
class EventCalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = OurEventCalenderModel::all();
        return view('admin.pages.event_calender.section1.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.event_calender.section1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = time().'.'.$request->image->extension();  
        $request->image->move(public_path('assets/web/images'), $file);

        $event = [
            'title' => $request->title,
            'event_time' => $request->event_time,
            'description' => $request->description,
        ];
        OurEventCalenderModel::create($event);
        $message = 'Event calender added successfully';
        return redirect()->route('event-calender.index')->with('success', $message);
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
        $event = OurEventCalenderModel::findOrFail($id);
        return view('admin.pages.event_calender.section1.edit',compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $event = OurEventCalenderModel::findOrFail($id);
        if($request->image){
            $file = time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/web/images'), $file);
        }else{
            $file = $event->image;
        }
        $data = [
            'title' => $request->title,
            'event_time' => $request->event_time,
            'description' => $request->description,
        ];
        $event->update($data);

        return redirect()->back()->with('success', "Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = OurEventCalenderModel::where('id',$id)->first()->image;
        if(isset($path)){
            $path = public_path().'/assets/web/images/'.$path;
            File::delete($path);
        }
        OurEventCalenderModel::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Event calender has been deleted successfully.',
            'status' => 'success',
        ));
    }

    public function banner(){
        $banner = PageBanner::where('type',25)->first();
        return view('admin.pages.event_calender.banner',compact('banner'));
    }
}
