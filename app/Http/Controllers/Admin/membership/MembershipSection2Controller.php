<?php

namespace App\Http\Controllers\Admin\membership;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\MembershipSection2;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\AboutPage;

class MembershipSection2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function section1(){
        $section = AboutPage::where('section',6)->first();
        return view('admin.pages.membershipSubPage1', compact('section'));
    }

    public function index()
    {
        $membershipSection2 = MembershipSection2::all();
        return view('admin.pages.membership.section2.index', compact('membershipSection2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.membership.section2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'heading' => 'required|string|max:255',
        ]);
        $file = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/web/images'), $file);

        $membershipSection2Data = [
            'image' => $file,
            'heading' => $request->heading,
        ];


        MembershipSection2::create($membershipSection2Data);
        $message = 'Team member added successfully';
        return redirect()->route('membershipSection2.index')->with('success', $message);


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipSection2  $membershipSection2
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipSection2 $membershipSection2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipSection2  $membershipSection2
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = MembershipSection2::findOrFail($id);
        return view('admin.pages.membership.section2.edit',compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MembershipSection2  $membershipSection2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = MembershipSection2::findOrFail($id);
        if($request->image){
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/web/images'), $file);
        }else{
            $file = $item->image;
        }
        $data = [
            'image' => $file,
            'heading' => $request->heading,
        ];
        $item->update($data);

        return redirect('admin/membershipSection2')->with('success', "Data Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipSection2  $membershipSection2
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = MembershipSection2::where('id',$id)->first()->image;
        if(isset($path)){
            $path = public_path().'/assets/web/images/'.$path;
            File::delete($path);
        }
        MembershipSection2::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Membership deleted successfully.',
            'status' => 'success',
        ));
    }

    public function banner(){
        $banner = PageBanner::where('type',5)->first();
        return view('admin.pages.membership.banner',compact('banner'));
    }
}
