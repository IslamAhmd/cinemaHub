<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Networks',
                'icon' => NULL,
                'route_name' => 'networks.index',
                'target' => '_self',
                'order' => 2,
                'parent_id' => 0,
                'data_type_id' => 1,
                'created_at' => '2018-04-01 16:50:27',
                'updated_at' => '2018-04-01 22:46:32',
            ),
            1 => 
            array (
                'id' => 3,
                'title' => 'Dummy Menu',
                'icon' => NULL,
                'route_name' => 'admin',
                'target' => '_self',
                'order' => 0,
                'parent_id' => 2,
                'data_type_id' => 1,
                'created_at' => '2018-04-01 22:35:58',
                'updated_at' => '2018-04-01 22:35:58',
            ),
            2 => 
            array (
                'id' => 4,
                'title' => 'Slider Images',
                'icon' => NULL,
                'route_name' => 'slider_images.index',
                'target' => '_self',
                'order' => 1,
                'parent_id' => 0,
                'data_type_id' => 1,
                'created_at' => '2018-04-01 22:44:41',
                'updated_at' => '2018-04-01 22:44:41',
            ),
            3 => 
            array (
                'id' => 5,
                'title' => 'Genres',
                'icon' => NULL,
                'route_name' => 'genres.index',
                'target' => '_self',
                'order' => 3,
                'parent_id' => 0,
                'data_type_id' => 3,
                'created_at' => '2018-04-01 22:47:57',
                'updated_at' => '2018-04-01 22:47:57',
            ),
            4 => 
            array (
                'id' => 6,
                'title' => 'Movies',
                'icon' => NULL,
                'route_name' => 'movies.index',
                'target' => '_self',
                'order' => 4,
                'parent_id' => 0,
                'data_type_id' => 4,
                'created_at' => '2018-04-01 22:49:34',
                'updated_at' => '2018-04-01 22:49:34',
            ),
            5 => 
            array (
                'id' => 7,
                'title' => 'TV Shows',
                'icon' => NULL,
                'route_name' => 'shows.index',
                'target' => '_self',
                'order' => 5,
                'parent_id' => 0,
                'data_type_id' => 5,
                'created_at' => '2018-04-01 22:51:10',
                'updated_at' => '2018-04-01 22:51:10',
            ),
            6 => 
            array (
                'id' => 8,
                'title' => 'Shows',
                'icon' => NULL,
                'route_name' => 'shows.index',
                'target' => '_self',
                'order' => 1,
                'parent_id' => 7,
                'data_type_id' => 5,
                'created_at' => '2018-04-01 22:51:53',
                'updated_at' => '2018-04-01 22:51:53',
            ),
            7 => 
            array (
                'id' => 9,
                'title' => 'Seasons',
                'icon' => NULL,
                'route_name' => 'seasons.index',
                'target' => '_self',
                'order' => 2,
                'parent_id' => 7,
                'data_type_id' => 6,
                'created_at' => '2018-04-01 22:52:56',
                'updated_at' => '2018-04-01 22:54:09',
            ),
            8 => 
            array (
                'id' => 10,
                'title' => 'Episodes',
                'icon' => NULL,
                'route_name' => 'episodes.index',
                'target' => '_self',
                'order' => 3,
                'parent_id' => 7,
                'data_type_id' => 7,
                'created_at' => '2018-04-01 22:55:14',
                'updated_at' => '2018-04-01 22:55:14',
            ),
        ));
        
        
    }
}