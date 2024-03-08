<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyInfoFormSetting;
use App\Models\CompanyInformation;
use App\Models\EventRequestForm;
use App\Models\Experience;
use App\Models\MembersSatisfiedFeedback;
use App\Models\NewsletterModel;
use App\Models\PartnerUser;
use App\Models\SponsorUser;
use App\Models\User;
use Illuminate\Http\Request;

class UsersDataController extends Controller
{
    public function satisfiedFeedback(){
        $data= MembersSatisfiedFeedback::all();

        return view('admin.pages.memberFeedback',compact('data'));
    }
    public function memberFeedbackDetail($id){
        $data = MembersSatisfiedFeedback::findOrFail($id);
 
        return view('admin.pages.memberFeedbackDetail', compact('data'));
    }
    public function companyInfoData(){
        $data= CompanyInformation::all();
        
        return view('admin.pages.companyInfoData',compact('data'));
    }
    public function membersData(){
        $users= User::all();
        return view('admin.pages.users.members.index',compact('users'));
    }
    public function userDetail($id){
        $user= $id;
        $memberRecord = CompanyInformation::where('user_id', $user)->get();
        $partnerRecord = PartnerUser::where('user_id', $user)->get();
        $sponsorRecord = SponsorUser::where('user_id', $user)->get();

            if ($memberRecord->isEmpty()) {
                $memberRecord = null;
            }
            if ($partnerRecord->isEmpty()) {
                $partnerRecord = null;
            }
            if ($sponsorRecord->isEmpty()) {
                $sponsorRecord = null;
            } 
        return view('admin.pages.users.members.userDetail',compact('memberRecord','partnerRecord','sponsorRecord'));
    }
    public function sponsorsData(){
        // type 3= members and type 2 = sponsors
        $sponsors = User::where('type', 2)->get();
        return view('admin.pages.users.sponsors.index',compact('sponsors'));
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
    public function destroyeFeedback($id)
    {
        MembersSatisfiedFeedback::destroy($id);

        return response()->json(array(
            'data' => true,
            'message' => 'Team member deleted successfully.',
            'status' => 'success',
        ));
    }
    public function deleteMember($id)
    {
        User::destroy($id);

        return response()->json(array(
            'data' => true,
            'message' => 'Team member deleted successfully.',
            'status' => 'success',
        ));
    }
    public function deleteSponsor($id)
    {
        User::destroy($id);

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
