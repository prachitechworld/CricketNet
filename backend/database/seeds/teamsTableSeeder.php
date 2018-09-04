<?php

use Illuminate\Database\Seeder;

class teamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // check if table users is empty
        if(DB::table('teams')->get()->count() == 0){

            DB::table('teams')->insert([

                [
                    'name' => 'Dare Devils',
                    'logo_uri' => 'teams/15358316231.png',
                    'club_state' => 1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'name' => 'Knight Riders',
                    'logo_uri' => 'teams/15358316232.jpg',
                    'club_state' => 1,                    
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'name' => 'Royal Challengers',
                    'logo_uri' => 'teams/15358317232.png',
                    'club_state' => 2,                    
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                
            ]);
        }
    }
}
