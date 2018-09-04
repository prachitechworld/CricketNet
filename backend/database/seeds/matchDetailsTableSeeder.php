<?php

use Illuminate\Database\Seeder;

class matchDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('match_details')->get()->count() == 0){

            DB::table('match_details')->insert([

                [
                    'stadium' => 'Eden Gardens',
                    'match_on' => '2018-04-03',
                    'teamA' => 1,
                    'teamB'=>2,
                    'winner'=>2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'stadium' => 'Nehru Stadium',
                    'match_on' => '2018-04-05',
                    'teamA' => 2,
                    'teamB'=>3,
                    'winner'=>3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'stadium' => 'Eden Gardens',
                    'match_on' => '2018-04-08',
                    'teamA' => 1,
                    'teamB'=>3,
                    'winner'=>3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
            ]);
            }
    }
}
