<?php

namespace App\Http\Controllers\Admin\team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Our_Team;

class TeamPageSection1Controller extends Controller
{
//    Create
public function index(){
    $teams = Our_Team::all();
    // dd($teams);
    return view('admin.pages.team.section1.index', compact('teams'));
}

public function deleteTeamMember(Request $request, $id)
{
    $team = Our_Team::findOrFail($id);
    $team->delete();

    return redirect()->back()->with('success', 'Team member deleted successfully');
}


public function createUpdateTeam(Request $request)
{
    // dd($request -> banner);
    $validatedData = $request->validate([
        'banner' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'name' => 'required|string|max:255',
        'profession' => 'required|string|max:255',
        'type' => 'required|in:0,1',
    ]);

    // Check if an ID is provided in the request, indicating an update
    $teamId = $request->input('team_id');

    // Prepare data for create or update
    $teamData = [
        'image' => $request->file('banner')->store('banners', 'public'),
        'name' => $validatedData['name'],
        'profession' => $validatedData['profession'],
        'type' => $validatedData['type'],
    ];

    // Create or update based on the presence of $teamId
    if ($teamId) {
        // Update the existing record
        Our_Team::find($teamId)->update($teamData);
        $message = 'Team member updated successfully';
    } else {
        // Create a new record
        Our_Team::create($teamData);
        $message = 'Team member added successfully';
    }

    // Redirect or do something else after saving
    return redirect()->back()->with('success', $message);
}

//    Read
//    Update
//    Delete
}
