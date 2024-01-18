<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\AdvocacyCommonSection;

class AdvocacyWomenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advocacySections = AdvocacyCommonSection::where('type', 'womenAdvocacy')->get();

        return view('admin.pages.advocacy_women_sections.index', ['advocacySections' => $advocacySections]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.advocacy_women_sections.create');
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

        AdvocacyCommonSection::create([
            'image' => $file,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'type' => 'womenAdvocacy',
        ]);

        return redirect()->route('advocacyWomenSection.index');
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
        $section2 = AdvocacyCommonSection::findOrFail($id);
        return view('admin.pages.advocacy_women_sections.edit',compact('section2'));
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
        $item = AdvocacyCommonSection::findOrFail($id);


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
            'type' => 'womenAdvocacy',
        ];
        $item->update($data);

        return redirect()->route('advocacyWomenSection.index')->with('success', 'Item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $path = AdvocacyCommonSection::where('id',$id)->first()->image;
        if(isset($path)){
            $path = public_path().'/assets/web/images/'.$path;
            File::delete($path);
        }
        AdvocacyCommonSection::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Item has been deleted.',
            'status' => 'success',
        ));
    }
}
