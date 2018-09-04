<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Match_details;

class MatchDetailsController extends Controller
{
    public function index()
    {
        //return Match_details::all();
        
            return Match_details::leftJoin('teams', 'teams.id', '=', 'match_details.teamA')
            ->leftJoin('teams as teamb', 'teamb.id', '=', 'match_details.teamB')
            ->leftJoin('teams as winnerteam', 'winnerteam.id', '=', 'match_details.winner')
            ->select(
            'teams.name as teamA',
            'teamb.name as teamB',
            'winnerteam.name as winner',
            'match_details.id',
            'match_details.stadium',
            'match_details.match_on'
            
            )
            ->get();
    

    }

    
}
