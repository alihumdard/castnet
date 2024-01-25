<?php

namespace App\Http\Controllers\Admin\job_openings;

use App\Http\Controllers\Controller;
use App\Models\CareersModel;
use App\Models\Job;
use Illuminate\Http\Request;
use App\Models\PageBanner;
use Illuminate\Support\Facades\File;


class JobOpeningController extends Controller
{
    public function banner(){
        $banner = PageBanner::where('type',50)->first();
        $page = "JOB OPENINGS";
        return view('admin.pages.banner',compact('banner','page'));
    }
    public function section1(){
        $section = CareersModel::where(['page'=>'JOB','section'=>1])->first();
        $page = "JOB OPENINGS";
        $sn = "Section 1";
        return view('admin.pages.careers.common_section',get_defined_vars());
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section = Job::all();
        $page = "JOB OPENINGS";
        $sn = "Section 1";
        return view('admin.pages.job_openings.common_section1',get_defined_vars());
    }
    public function createJob(){
        $page = "JOB OPENINGS";
        $sn = "Create Job";
        return view('admin.pages.job_openings.create_job',get_defined_vars());
    }
    public function editJob(){

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

    $checkboxValues = [];

    $checkboxValues[] = $request->has('fulltime') ? $request->input('fulltime') : '';
    $checkboxValues[] = $request->has('engineering') ? $request->input('engineering') : '';
    $checkboxValues[] = $request->has('onsite') ? $request->input('onsite') : '';



        Job::create([
            'job_title' => $request->name,
            'salary_detail' => $request->salary,
            'job_description' => $request->description,
            'duration_detail' => json_encode($checkboxValues),
            'status' => $request->status,
        ]);

        return redirect('admin/Jobs')->with('success', 'Data saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $section = Job::where('id',$id)->first();
        if ($section == null) {
            return redirect()->back()->with('error', 'No records were found for editing.');
        }
        $decodedDetail = json_decode($section->duration_detail);
        $page = "JOB OPENINGS";
        $sn = "Edit Job";
        return view('admin.pages.job_openings.edit_job',get_defined_vars());
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
        $advocacy = Job::findOrFail($id);
        $decodedDetail = json_decode($advocacy->duration_detail);


        $checkboxValues = [];

        $checkboxValues[] = $request->has('fulltime') ? $request->input('fulltime') : '';
        $checkboxValues[] = $request->has('engineering') ? $request->input('engineering') : '';
        $checkboxValues[] = $request->has('onsite') ? $request->input('onsite') : '';

            if ($advocacy == null) {
                return redirect()->back()->with('error', 'No records were found for updation.');
            }


            $data = [
                'job_title' => $request->heading,
                'salary_detail' => $request->salary,
                'job_description' => $request->description,
                'duration_detail' => json_encode($checkboxValues),
                'status' => $request->status,
            ];
            $advocacy->update($data);
            return redirect('admin/Jobs')->with('success', 'Data saved successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = Job::where('id',$id)->first()->image;
        if(isset($path)){
            $path = public_path().'/assets/web/images/'.$path;
            File::delete($path);
        }
        Job::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Data deleted successfully.',
            'status' => 'success',
        ));
    }
    public function updation(Request $request,$id){

        $JOB = CareersModel::findOrFail($id);
        if ($JOB == null) {
            return redirect()->back()->with('error', 'No records were found for updation.');
        }
        elseif($JOB->page=='JOB' && $JOB->section==1){
            $route = "JOB.section1";
        }elseif($JOB->page=='grants' && $JOB->section==1){
            $route = "grants.section1";
        }

        if($request->image){
            $path = $JOB->image;
            if(isset($path)){
                $path = public_path().'/assets/web/images/'.$path;
                File::delete($path);
            }
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/web/images'), $file);
        }else{
            $file = $JOB->image;
        }

        $data = [
            'title' => $request->title,
            'image' => $file,
            'description' => $request->description,
        ];
        $JOB->update($data);

        return redirect()->route($route)->with('success', "Data Updated Successfully.");
    }
}
