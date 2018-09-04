<?php

use Illuminate\Database\Seeder;

class playersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('players')->get()->count() == 0){

            DB::table('players')->insert([

                [
                    'first_name' => 'Gautam',
                    'last_name' => 'Gambhir',
                    'image_uri' => 'players/1535877941.jpg',
                    'jersey_number'=>'1',
                    'country'=>'IND',
                    'team_id'=>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'first_name' => 'Rishabh',
                    'last_name' => 'Pant',
                    'image_uri' => 'players/1535877981.jpg',
                    'jersey_number'=>'2',
                    'country'=>'IND',
                    'team_id'=>1,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'first_name' => 'Dinesh',
                    'last_name' => 'Karthik',
                    'image_uri' => 'players/1535877781.jpg',
                    'jersey_number'=>'5',
                    'country'=>'IND',
                    'team_id'=>2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'first_name' => 'Chris',
                    'last_name' => 'Lynn',
                    'image_uri' => 'players/1545867781.jpg',
                    'jersey_number'=>'6',
                    'country'=>'AUS',
                    'team_id'=>2,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'first_name' => 'Virat',
                    'last_name' => 'Kohli',
                    'image_uri' => 'players/1645867781.jpg',
                    'jersey_number'=>'7',
                    'country'=>'IND',
                    'team_id'=>3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
                [
                    'first_name' => 'AB De',
                    'last_name' => 'Villiers',
                    'image_uri' => 'players/1445867781.jpg',
                    'jersey_number'=>'8',
                    'country'=>'SA',
                    'team_id'=>3,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),                   
                ],
            ]);
        }
    }
}
