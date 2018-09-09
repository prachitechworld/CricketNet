<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateMatchPlayersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_players_details', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('match_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->integer('player_id')->unsigned();
            $table->bigInteger('runs');
            $table->integer('fours');
            $table->integer('sixes');
            $table->integer('fifties');
            $table->integer('hundreds');
            $table->timestamps();
        });
        Schema::table('match_players_details', function($table) {
            $table->foreign('match_id')->references('id')->on('match_details');
            $table->foreign('team_id')->references('id')->on('teams');
            $table->foreign('player_id')->references('id')->on('players');
        });


        /** Exec Procedure Script */
        DB::unprepared('
        CREATE PROCEDURE GetAllTeamPlayers(in match_id int(10))
        BEGIN
        CREATE TEMPORARY TABLE teamPlayersData(team int(10),name varchar (150),runs bigint(20),fours int(11),sixes int(11),fifties int(11),hundreds int(11));
        INSERT INTO teamPlayersData 
                SELECT p.team_id,CONCAT_WS(" ",p.first_name,p.last_name) as name,mpd.runs,mpd.fours,mpd.sixes,mpd.fifties,mpd.hundreds
            FROM `match_details` m
            JOIN match_players_details mpd ON m.teamA=mpd.team_id
            JOIN players p ON mpd.player_id=p.id
            WHERE m.id=match_id and mpd.match_id=match_id
    union all
    SELECT p.team_id,CONCAT_WS(" ",p.first_name,p.last_name) as name,mpd.runs,mpd.fours,mpd.sixes,mpd.fifties,mpd.hundreds
            FROM `match_details` m
            JOIN match_players_details mpd ON m.teamB=mpd.team_id
            JOIN players p ON mpd.player_id=p.id
            WHERE m.id=match_id and mpd.match_id=match_id;

            
            SELECT * FROM teamPlayersData;

            DROP TEMPORARY TABLE IF EXISTS teamPlayersData;

        END
    ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_players_details');
        DB::unprepared('DROP PROCEDURE IF EXISTS GetAllTeamPlayers');

    }
}