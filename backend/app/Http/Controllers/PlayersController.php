<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Player_history;

class PlayersController extends Controller
{
    public function index($team_id)
    {
        return Player::where(['team_id'=>$team_id])->get();
    }

    public function playerHistory($id)
    {
        return Player_history::where(['player_id'=>$id])->get();
    }

    public function playersData(){
        return Player::leftJoin('player_histories', 'players.id', '=', 'player_histories.player_id')
        ->select(
        'players.first_name',
        'players.last_name',
        'player_histories.runs'
        )
        ->get()->toArray();

    }
 
 
    
}
