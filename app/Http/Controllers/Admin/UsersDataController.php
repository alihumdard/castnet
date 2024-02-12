<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyInformation;
use App\Models\EventRequestForm;
use App\Models\Experience;
use App\Models\NewsletterModel;
use Illuminate\Http\Request;

class UsersDataController extends Controller
{
    public function companyInfoData(){
        $data= CompanyInformation::all();

        return view('admin.pages.companyInfoData',compact('data'));
    }
    public function subscribers(){

        $data= NewsletterModel::all();

        return view('admin.pages.subscribers',compact('data'));
    }
    public function experience(){

        $data= Experience::all();

        return view('admin.pages.experiences',compact('data'));
    }
    public function companyInfoDetail($id){

        $companyInfo = CompanyInformation::findOrFail($id);

        return view('admin.pages.companyInfoDetail', compact('companyInfo'));
    }
    public function eventData(){
        $data= EventRequestForm::all();
        return view('admin.pages.eventData', compact('data'));
    }
    public function eventDetail($id){
        $eventInfo = EventRequestForm::findOrFail($id);
        return view('admin.pages.eventDetail', compact('eventInfo'));
    }
    public function experienceDetail($id){
        $eventInfo = Experience::findOrFail($id);

        return view('admin.pages.experienceDetail', compact('eventInfo'));
    }

    public function destroyEvent($id)
    {
        EventRequestForm::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Team member deleted successfully.',
            'status' => 'success',
        ));
    }
    public function destroysubscriber($id)
    {
        NewsletterModel::destroy($id);

        return response()->json(array(
            'data' => true,
            'message' => 'Team member deleted successfully.',
            'status' => 'success',
        ));
    }
    public function destroyexperience($id)
    {
        Experience::destroy($id);

        return response()->json(array(
            'data' => true,
            'message' => 'Team member deleted successfully.',
            'status' => 'success',
        ));
    }
    public function destroyInfo($id)
    {
        CompanyInformation::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Team member deleted successfully.',
            'status' => 'success',
        ));
    }
}
