<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_histories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('player_id')->unsigned(); 
            $table->integer('matches');
            $table->bigInteger('runs');
            $table->integer('highest_score');
            $table->integer('fifties');
            $table->integer('hundreds');
            $table->timestamps();
        });
        Schema::table('player_histories', function($table) {
            $table->foreign('player_id')->references('id')->on('players');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player_histories');
    }
}
