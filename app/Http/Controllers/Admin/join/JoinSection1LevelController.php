<?php

namespace App\Http\Controllers\Admin\join;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membership_Level;
use App\Models\PageBanner;

class JoinSection1LevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $membershipLevels= Membership_Level::all();

        return view('admin.pages.join.section1.index',compact('membershipLevels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.join.section1.create');
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
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        Membership_Level::create($validatedData);


        return redirect()->route('joinSection1.index');

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
        $level = Membership_Level::find($id);

        return view('admin.pages.join.section1.edit', compact('level'));
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $level = Membership_Level::find($id);


        $level->update($validatedData);

        return redirect()->route('joinSection1.index')->with('success', 'Level updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Membership_Level::destroy($id);
        return response()->json(array(
            'data' => true,
            'message' => 'Feature has been deleted.',
            'status' => 'success',
        ));
    }

    public function banner(){
        $banner = PageBanner::where('type',6)->first();
        $page = "Join";
        return view('admin.pages.banner',compact('banner','page'));
    }
}
