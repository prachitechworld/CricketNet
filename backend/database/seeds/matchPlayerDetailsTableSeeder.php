<?php

use Illuminate\Database\Seeder;

class matchPlayerDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('match_players_details')->get()->count() == 0){

            DB::table('match_players_details')->insert([

                [
                    'match_id' => 1,
                    'team_id' => 7,
                    'player_id'=>7,
                    'runs' => 70,
                    'fours'=>9,
                    'sixes'=>3,
                    'fifties'=>1,
                    'hundreds'=>0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')                   
                ],
                [
                    'match_id' => 1,
                    'team_id' => 7,
                    'player_id'=>8,
                    'runs' => 90,
                    'fours'=>6,
                    'sixes'=>5,
                    'fifties'=>1,
                    'hundreds'=>0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')                   
                ],
                [
                    'match_id' => 1,
                    'team_id' => 8,
                    'player_id'=>9,
                    'runs' => 35,
                    'fours'=>2,
                    'sixes'=>0,
                    'fifties'=>0,
                    'hundreds'=>0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'match_id' => 1,
                    'team_id' => 8,
                    'player_id'=>10,
                    'runs' => 112,
                    'fours'=>12,
                    'sixes'=>5,
                    'fifties'=>0,
                    'hundreds'=>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'match_id' => 2,
                    'team_id' => 8,
                    'player_id'=>9,
                    'runs' => 70,
                    'fours'=>9,
                    'sixes'=>3,
                    'fifties'=>1,
                    'hundreds'=>0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'match_id' => 2,
                    'team_id' => 8,
                    'player_id'=>10,
                    'runs' => 80,
                    'fours'=>10,
                    'sixes'=>1,
                    'fifties'=>1,
                    'hundreds'=>0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],
                [
                    'match_id' => 2,
                    'team_id' => 9,
                    'player_id'=>11,
                    'runs' => 120,
                    'fours'=>12,
                    'sixes'=>5,
                    'fifties'=>0,
                    'hundreds'=>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ],    
                [    'match_id' => 2,
                    'team_id' => 9,
                    'player_id'=>12,
                    'runs' => 98,
                    'fours'=>7,
                    'sixes'=>3,
                    'fifties'=>1,
                    'hundreds'=>0,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]
            ]);
        }
    }
}
