<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'slider_images',
                'permissions' => 15,
                'created_at' => '2018-04-01 16:20:15',
                'updated_at' => '2018-04-01 16:20:15',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'networks',
                'permissions' => 15,
                'created_at' => '2018-04-01 22:40:45',
                'updated_at' => '2018-04-01 22:40:45',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'genres',
                'permissions' => 15,
                'created_at' => '2018-04-01 22:41:19',
                'updated_at' => '2018-04-01 22:41:19',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'movies',
                'permissions' => 15,
                'created_at' => '2018-04-01 22:41:33',
                'updated_at' => '2018-04-01 22:41:33',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'tv_show',
                'permissions' => 15,
                'created_at' => '2018-04-01 22:41:49',
                'updated_at' => '2018-04-01 22:41:49',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'seasons',
                'permissions' => 15,
                'created_at' => '2018-04-01 22:42:05',
                'updated_at' => '2018-04-01 22:42:05',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'episodes',
                'permissions' => 15,
                'created_at' => '2018-04-01 22:42:46',
                'updated_at' => '2018-04-01 22:42:46',
            ),
        ));
        
        
    }
}