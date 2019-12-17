<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('role_user')->delete();
        
        \DB::table('role_user')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => 1,
                'user_id' => 1,
                'created_at' => '2019-11-28 20:32:31',
                'updated_at' => '2019-11-28 20:32:31',
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => 1,
                'user_id' => 2,
                'created_at' => '2019-12-04 11:06:18',
                'updated_at' => '2019-12-04 11:06:18',
            ),
            2 => 
            array (
                'id' => 4,
                'role_id' => 2,
                'user_id' => 3,
                'created_at' => '2019-12-17 03:32:45',
                'updated_at' => '2019-12-17 03:32:45',
            ),
            3 => 
            array (
                'id' => 5,
                'role_id' => 3,
                'user_id' => 4,
                'created_at' => '2019-12-17 03:34:01',
                'updated_at' => '2019-12-17 03:34:01',
            ),
            4 => 
            array (
                'id' => 7,
                'role_id' => 4,
                'user_id' => 5,
                'created_at' => '2019-12-17 03:34:45',
                'updated_at' => '2019-12-17 03:34:45',
            ),
            5 => 
            array (
                'id' => 8,
                'role_id' => 5,
                'user_id' => 6,
                'created_at' => '2019-12-17 03:34:58',
                'updated_at' => '2019-12-17 03:34:58',
            ),
            6 => 
            array (
                'id' => 9,
                'role_id' => 6,
                'user_id' => 7,
                'created_at' => '2019-12-17 03:35:17',
                'updated_at' => '2019-12-17 03:35:17',
            ),
        ));
        
        
    }
}