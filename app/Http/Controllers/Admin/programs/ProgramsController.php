<?php

namespace App\Http\Controllers\Admin\programs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramSection1;
use App\Models\ProgramSection2;
use Illuminate\Support\Facades\File;

class ProgramsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programsSection1 = ProgramSection1::first();
        $programsSection2 = ProgramSection2::all();

        return view('admin.pages.programs.section1.index', [
            'programsSection1' => $programsSection1,
            'programsSection2' => $programsSection2,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.programs.section1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $file = time().'.'.$request->image->extension();
        $request->image->move(public_path('assets/web/images'), $file);

        ProgramSection2::create([
            'image' => $file,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('programs.index');
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
        $section2 = ProgramSection2::findOrFail($id);
        return view('admin.pages.programs.section1.edit',compact('section2'));
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
        $item = ProgramSection2::findOrFail($id);


        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'string|max:255',
            'description' => 'string',
        ]);

        if($request->image){
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('assets/web/images'), $file);
        }else{
            $file = $item->image;
        }

        $data = [
            'image' => $file,
            'title' => $request->title,
            'description' => $request->description,
            'type' => 'SSAdvocacy',
        ];
        $item->update($data);

        return redirect()->route('programs.index')->with('success', 'Item updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = ProgramSection2::where('id',$id)->first()->image;
        if(isset($path)){
            $path = public_path().'/assets/web/images/'.$path;
            File::delete($path);
        }
        ProgramSection2::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Item has been deleted.',
            'status' => 'success',
        ));
    }
}
