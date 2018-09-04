<?php

use Illuminate\Database\Seeder;

class teamPointsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('team_points')->get()->count() == 0){

            DB::table('team_points')->insert([

                [
                    'team_id' => 1,
                    'points' => 153,
                    'rating' => 3,                    
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'team_id' => 2,
                    'points' => 200,
                    'rating' => 2,                    
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'team_id' => 3,
                    'points' => 300,
                    'rating' => 1,                    
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ]
            ]);
        }
        
    }
}
