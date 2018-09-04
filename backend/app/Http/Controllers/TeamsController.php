<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;


class TeamsController extends Controller
{
    public function index()
    {
        return Team::all();
    }
 
    public function show($id)
    {
        
       return Team::select('name','logo_uri')->where('id', $id)->get();

    }

    public function teamsData(){
        return Team::leftJoin('team_points', 'teams.id', '=', 'team_points.team_id')
        ->select(
        'teams.name',
        'teams.logo_uri',
        'team_points.points',
        'team_points.rating'
        )
        ->get();

    }
    
 
}
