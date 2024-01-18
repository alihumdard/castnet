<?php

namespace App\Http\Controllers\Admin\Events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventModel;
use App\Models\PageBanner;
class EventSection1Controller extends Controller
{
    public function section1()
    {
        $event = EventModel::where('section',1)->first();
        return view('admin.pages.events.index', compact('event'));
    }

    public function section3()
    {
        $event = EventModel::where('section',3)->first();
        return view('admin.pages.events.index', compact('event'));
    }

    public function update(Request $request,$id){
        $event = EventModel::findOrFail($id);
        if($request->image){
            $file = time().'.'.$request->image->extension();  
            $request->image->move(public_path('assets/web/images'), $file);
        }else{
            $file = $event->image;
        }
        $data = [
            'image' => $file,
            'title' => $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'section' => $event->section,
        ];
        $event->update($data);

        return redirect()->back()->with('success', "Data Updated Successfully");
    }

    public function banner(){
        $banner = PageBanner::where('type',24)->first();
        $page = "Events";
        return view('admin.pages.banner',compact('banner','page'));
    }
}
