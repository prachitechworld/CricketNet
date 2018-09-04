<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::get('teams', 'TeamsController@index');
Route::get('teams/{id}', 'TeamsController@show');
Route::get('players/{team_id}', 'PlayersController@index');
Route::get('player-history/{id}', 'PlayersController@playerHistory');
Route::get('match-details', 'MatchDetailsController@index');
Route::get('players-data', 'PlayersController@playersData');
Route::get('teams-data', array('uses' => 'TeamsController@teamsData','middleware' => ['checkHeader']));

