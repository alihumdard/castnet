<?php

namespace App\Http\Controllers\Admin\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Our_Team;

class TeamPageSection1Controller extends Controller
{

public function index(){
    $teams = Our_Team::all();

    return view('admin.pages.team.section1.index', compact('teams'));
}

public function addMember(){
    return view('admin.pages.team.section1.create');
}

public function deleteTeamMember(Request $request, $id)
{
    $team = Our_Team::findOrFail($id);
    $team->delete();

    return redirect()->back()->with('success', 'Team member deleted successfully');
}

public function teamUpdate(Request $request, $id){
$team = Our_Team::findOrFail($id);

return view('admin.pages.team.section1.edit', compact('team'));
}


public function createTeamMember(Request $request)
{

    $validatedData = $request->validate([
        'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name' => 'required|string|max:255',
        'profession' => 'required|string|max:255',
        'type' => 'required|in:0,1',
    ]);

    $teamData = [
        'image' => $request->file('banner')->store('banners', 'public'),
        'name' => $validatedData['name'],
        'profession' => $validatedData['profession'],
        'type' => $validatedData['type'],
    ];
        Our_Team::create($teamData);
        $message = 'Team member added successfully';


    return redirect()->route('ourTeam.section1')->with('success', $message);
}
public function updateTeamMember(Request $request, $id)
{
    $team = Our_Team::findOrFail($id);

    $team->name = $request->input('name');
    $team->profession = $request->input('profession');
    $team->type = $request->input('type');

    if ($request->hasFile('banner')) {

        $team->image = $request->file('banner')->store('banners', 'public');
    }else {
        $team->image = $request->input('previousbanner');
    }

    $team->save();

    return redirect()->route('ourTeam.section1')->with('success', "Updated Successfully");
}

}
