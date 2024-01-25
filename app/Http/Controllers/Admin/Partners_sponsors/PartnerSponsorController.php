<?php

namespace App\Http\Controllers\Admin\Partners_sponsors;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use App\Models\PartnersModel;
use App\Models\PartnerSponsorPageTitleModel;

class PartnerSponsorController extends Controller
{

    public function banner(){
        $banner = PageBanner::where('type',32)->first();
        $page = "Partners Sponsors";
        return view('admin.pages.banner',compact('banner','page'));
    }

    public function section2(){
        $section = PartnersModel::where('section',2)->get();
        $title = PartnerSponsorPageTitleModel::where(['page'=>'partners_sponsors','section'=>2])->first();
        $sn = "Section 2";
        return view('admin.pages.partners_sponsors.index',get_defined_vars());
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $section = PartnersModel::where('section',1)->get();
        $title = PartnerSponsorPageTitleModel::where(['page'=>'partners_sponsors','section'=>1])->first();
        $sn = "Section 1";
        return view('admin.pages.partners_sponsors.index',get_defined_vars());
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
    public function store(Request $request){
        if($request->section==1){
            $route = "partnersponsor.index";
        }else{
            $route = "partnersponsor.section2";
        }

        $file = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/web/images'), $file);

        PartnersModel::create([
            'title' => $request->title,
            'image' => $file,
            'section' => $request->section,
        ]);

        return redirect()->route($route)->with('success', "Data added successfully.");
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
    public function edit($id){
        $section = PartnersModel::where('id',$id)->first();
        if ($section == null) {
            return redirect()->back()->with('error', 'No records were found for editing.');
        }
        $sn = "Section ".$section->section;
        return view('admin.pages.partners_sponsors.edit',get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        $partner = PartnersModel::findOrFail($id);
        if ($partner == null) {
            return redirect()->back()->with('error', 'No records were found for updation.');
        }
        if($partner->section==1){
            $route = "partnersponsor.index";
        }else{
            $route = "partnersponsor.section2";
        }

        if($request->image){
            $path = $partner->image;
            if(isset($path)){
                $path = public_path().'/assets/web/images/'.$path;
                File::delete($path);
            }
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/web/images'), $file);
        }else{
            $file = $partner->image;
        }

        $data = [
            'title' => $request->title,
            'image' => $file,
        ];
        $partner->update($data);

        return redirect()->route($route)->with('success', "Data Updated Successfully.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $path = PartnersModel::where('id',$id)->first()->image;
        if(isset($path)){
            $path = public_path().'/assets/web/images/'.$path;
            File::delete($path);
        }
        PartnersModel::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Data deleted successfully.',
            'status' => 'success',
        ));
    }

    public function titleSave(Request $request){
        PartnerSponsorPageTitleModel::where(['page'=>$request->page,'section'=>$request->section])->update([
            'title'=>$request->title
        ]);
        return response()->json(array(
            'status' => true,
            'message' => 'Section title has been updated.',
        ));
    }
}
