<?php

namespace App\Http\Controllers\Admin\benefits;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\benefits_page_section;
use App\Models\benefits_pagetop_section;

class BenefitsSection3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $section1Benefits = benefits_pagetop_section::where('type', 'section2')->first();
        $section2Benefits = benefits_page_section::where('type', 'section2')->get();

        return view('admin.pages.benefits.section3.index', [
            'section1Benefits' => $section1Benefits,
            'section2Benefits' => $section2Benefits,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.benefits.section3.create');
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

        benefits_page_section::create([
            'image' => $file,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'type' =>'section2',
        ]);

        return redirect()->route('benefits-section3.index');
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
        $section2 = benefits_page_section::findOrFail($id);
        return view('admin.pages.benefits.section3.edit',compact('section2'));
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
        $item = benefits_page_section::findOrFail($id);


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
            'type' => 'section2',
        ];
        $item->update($data);

        return redirect()->route('benefits-section3.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = benefits_page_section::where('id',$id)->first()->image;
        if(isset($path)){
            $path = public_path().'/assets/web/images/'.$path;
            File::delete($path);
        }
        benefits_page_section::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Item has been deleted.',
            'status' => 'success',
        ));
    }
}
