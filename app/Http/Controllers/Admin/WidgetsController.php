<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JoinWidget;

class WidgetsController extends Controller
{
    public function index(){
        $joinWidgetData = JoinWidget::first();
        return view('admin.pages.joinWidget',compact('joinWidgetData'));
    }
    public function udpateJoinWidget(Request $request, $id){

        $joinWidget = JoinWidget::findOrFail($id);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'button1' => $request->button1,
            'button1_link' => $request->button1link,
            'button2' => $request->button2,
            'button2_link' => $request->button2link,
        ];
        // dd($data);
        $joinWidget->update($data);

        return redirect()->back()->with('success', "Data Updated Successfully");
    }
}
