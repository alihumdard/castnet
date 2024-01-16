<?php

namespace App\Http\Controllers\Admin\Event_calender;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EventCalenderSection2Model;
class EventCalenderSection2Controller extends Controller
{
    public function index(){
        $event = EventCalenderSection2Model::first();
        return view('admin.pages.event_calender.section2.index', compact('event'));
    }

    public function update(Request $request,$id){
        $event = EventCalenderSection2Model::findOrFail($id);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'button1' => $event->button1,
            'button1_link' => $event->button1_link,
            'button2' => $event->button2,
            'button2_link' => $event->button2_link,
        ];
        $event->update($data);

        return redirect()->back()->with('success', "Data Updated Successfully");
    }
}
