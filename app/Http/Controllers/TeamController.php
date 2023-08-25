<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Page;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::latest()->paginate(50);
        return view('teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Team $team = null)
    {
        if (!$team) {
            $team = new Team();
        }
        return view('teams.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamRequest $request)
    {
        $data = $request->validated();
        // return $data;
        if ($request->file('photo')) {
            $data['photo'] = Storage::putFile('team', $request->file('photo'));
        }
        Team::create($data);
        return redirect()
            ->route('teams.index')
            ->with('success', 'Teams Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return $this->create($team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamRequest  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, Team $team)
    {
        $data = $request->validated();
        // return $data;
        if ($request->file('photo')) {
            if ($team->photo) {
                Storage::delete($team->photo);
            }
            $data['photo'] = Storage::putFile('team', $request->file('photo'));
        }
        $team->update($data);
        return redirect()
            ->route('teams.index')
            ->with('success', 'Teams updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Storage::delete($team->photo);
        $team->delete();
        return redirect()
            ->back()
            ->with('success', 'Team Deleted');
    }
}
