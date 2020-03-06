<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tweet; // need to pull in out model to use it
use Auth; // need to pull in Auth in order to use it
use App\User;
use App\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teamsAndUsers = array();

        $teams = Team::all();
        foreach ( $teams as $team )
        {
            $newSet = new \stdClass();
            $newSet->team = $team;
            $newSet->users = $team->users()->get();
            $teamsAndUsers[] = $newSet;
        }

        return view( 'teams.index', compact( 'teamsAndUsers' ) );
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $team = Team::find($team_id);
        $team->users()->attach($user_id);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
      

        return view( 'teams.show', compact('team') );
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
