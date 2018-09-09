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
                    'match_on' => '2018-09-05',
                    'teamA' => 7,
                    'teamB'=>8,
                    'winner'=>8,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'stadium' => 'Nehru Stadium',
                    'match_on' => '2018-09-07',
                    'teamA' => 8,
                    'teamB'=>9,
                    'winner'=>9,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'stadium' => 'Eden Gardens',
                    'match_on' => '2018-09-15',
                    'teamA' => 9,
                    'teamB'=>7,
                    'winner'=>NULL,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
            ]);
            }
    }
}
