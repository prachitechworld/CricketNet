<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stadium');
            $table->date('match_on');
            $table->integer('teamA')->unsigned();
            $table->integer('teamB')->unsigned();
            $table->integer('winner')->unsigned();
            $table->timestamps();
        });

        Schema::table('match_details', function($table) {
            $table->foreign('teamA')->references('id')->on('teams');
        });
        Schema::table('match_details', function($table) {
            $table->foreign('teamB')->references('id')->on('teams');
        });
        Schema::table('match_details', function($table) {
            $table->foreign('winner')->references('id')->on('teams');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_details');
    }
}
