<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Match_details;

class MatchDetailsController extends Controller
{
    /**
     * @author: Prachi Aggarwal <prachijobs90@gmail.com>
     * @date: 02-sep-2018
     * @description : Provide all match details
     * |index : get all scheduled matches
     * |getById : get match details by id
     * |matchTeamData : Provide the details of match along with players list
     */
    public function index()
    {
        
            return Match_details::leftJoin('teams', 'teams.id', '=', 'match_details.teamA')
            ->leftJoin('teams as teamb', 'teamb.id', '=', 'match_details.teamB')
            ->leftJoin('teams as winnerteam', 'winnerteam.id', '=', 'match_details.winner')
            ->select(
            'teams.name as teamA',
            'teams.logo_uri as teamALogo',
            'teamb.logo_uri as teamBLogo',
            'teamb.name as teamB',
            'winnerteam.name as winner',
            'match_details.id',            
             DB::raw("DATE_FORMAT(match_details.match_on, '%a, %d/%m') as match_on"),
            'match_details.stadium'
            )->get();
    

    }

    public function getById($id)
    {
        
            return Match_details::leftJoin('teams', 'teams.id', '=', 'match_details.teamA')
            ->leftJoin('teams as teamb', 'teamb.id', '=', 'match_details.teamB')
            ->leftJoin('teams as winnerteam', 'winnerteam.id', '=', 'match_details.winner')
            ->select(
            'teams.name as teamA',
            'teams.logo_uri as teamALogo',
            'teamb.logo_uri as teamBLogo',
            'teamb.name as teamB',
            'winnerteam.name as winner',
            'match_details.id',            
             DB::raw("DATE_FORMAT(match_details.match_on, '%a, %d/%m') as match_on"),
            'match_details.stadium'
            )->where(['match_details.id'=>$id])->get();
    

    }

    public function matchTeamData($Param1)
    {
        $result_set= DB::select('call GetAllTeamPlayers(?)',array($Param1));
        $teamA="";
        $teamAPlayers=[];
        $teamBPlayers=[];
        $temp_team_a=0;
        $temp_team_b=0;
        if(!empty($result_set)){
            $teamA=$result_set[0]->team;
            foreach($result_set as $value){
            if($value->team==$teamA){
                $teamAPlayers[]=$value;
                $temp_team_a=$temp_team_a+$value->runs;
                
            }else{
                $teamBPlayers[]=$value;
                $temp_team_b=$temp_team_b+$value->runs;
                
            }
            } 
        }
        $result=json_encode(['teamA'=>$teamAPlayers,'teamB'=>$teamBPlayers,'teamARuns'=>$temp_team_a,'teamBRuns'=>$temp_team_b]);
        return $result;

    }

    
}
