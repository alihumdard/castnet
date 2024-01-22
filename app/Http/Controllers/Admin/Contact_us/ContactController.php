<?php

namespace App\Http\Controllers\Admin\Contact_us;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUsModel;
use App\Models\PageBanner;
class ContactController extends Controller
{
    public function info(){
        $contact = ContactUsModel::first();
        return view('admin.pages.contact_us.index',get_defined_vars());
    }

    public function banner(){
        $banner = PageBanner::where('type',4)->first();
        $page = "Contact us";
        return view('admin.pages.banner',compact('banner','page'));
    }

    public function update(Request $request,$id){
        $contact = ContactUsModel::findOrFail($id);
        if ($contact == null) {
            return redirect()->back()->with('error', 'No records were found for updation.');
        }
        $data = [
            'phone1' => $request->phone1,
            'phone2' => $request->phone2,
            'email1' => $request->email1,
            'email2' => $request->email2,
            'address' => $request->address,
        ];
        $contact->update($data);

        return redirect()->back()->with('success', "Data Updated Successfully.");
    }
}
