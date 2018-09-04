<?php

use Illuminate\Database\Seeder;

class playerHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('player_histories')->get()->count() == 0){

            DB::table('player_histories')->insert([

                [
                    'player_id' => 7,
                    'matches' => 147,
                    'runs' => 5238,
                    'highest_score'=>150,
                    'fifties'=>34,
                    'hundreds'=>11,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'player_id' => 8,
                    'matches' => 10,
                    'runs' => 500,
                    'highest_score'=>70,
                    'fifties'=>5,
                    'hundreds'=>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'player_id' => 9,
                    'matches' => 79,
                    'runs' => 1496,
                    'highest_score'=>94,
                    'fifties'=>4,
                    'hundreds'=>0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'player_id' => 10,
                    'matches' => 10,
                    'runs' => 158,
                    'highest_score'=>44,
                    'fifties'=>0,
                    'hundreds'=>0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'player_id' => 11,
                    'matches' => 211,
                    'runs' => 9779,
                    'highest_score'=>183,
                    'fifties'=>48,
                    'hundreds'=>35,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'player_id' => 12,
                    'matches' => 228,
                    'runs' => 9577,
                    'highest_score'=>176,
                    'fifties'=>53,
                    'hundreds'=>25,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
            ]);
        }
    }
}
