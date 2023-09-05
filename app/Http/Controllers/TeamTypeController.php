<?php

namespace App\Http\Controllers;

use App\Models\TeamType;
use App\Http\Requests\StoreTeamTypeRequest;
use App\Http\Requests\UpdateTeamTypeRequest;

class TeamTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TeamType $teamType = null)
    {
        if (!$teamType) {
            $teamType = new TeamType();
        }
        $teamTypes = TeamType::get();
        return view('team-type.index', compact('teamType', 'teamTypes'));
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
     * @param  \App\Http\Requests\StoreTeamTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTeamTypeRequest $request)
    {
        TeamType::create($request->validated());
        return redirect()
            ->back()
            ->with('success', 'Team Type Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeamType  $teamType
     * @return \Illuminate\Http\Response
     */
    public function show(TeamType $teamType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeamType  $teamType
     * @return \Illuminate\Http\Response
     */
    public function edit(TeamType $teamType)
    {
        return $this->index($teamType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeamTypeRequest  $request
     * @param  \App\Models\TeamType  $teamType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamTypeRequest $request, TeamType $teamType)
    {
        $teamType->update($request->validated());
        return redirect()
            ->route('team-types.index')
            ->with('success', 'Team Type Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeamType  $teamType
     * @return \Illuminate\Http\Response
     */
    public function destroy(TeamType $teamType)
    {
        $teamType->delete();
        return redirect()
            ->back()
            ->with('success', 'Team Type Deleted');
    }
}
