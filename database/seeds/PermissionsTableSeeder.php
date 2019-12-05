<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'index-role',
                'slug' => 'index-role',
                'description' => 'index-role',
                'role_id' => 1,
                'created_at' => '2019-11-28 20:52:27',
                'updated_at' => '2019-11-28 20:52:27',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'create-role',
                'slug' => 'create-role',
                'description' => 'create-role',
                'role_id' => 1,
                'created_at' => '2019-11-28 20:55:55',
                'updated_at' => '2019-11-28 20:55:55',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'view-role',
                'slug' => 'view-role',
                'description' => 'view-role',
                'role_id' => 1,
                'created_at' => '2019-11-28 20:56:38',
                'updated_at' => '2019-11-28 20:56:38',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'update-role',
                'slug' => 'update-role',
                'description' => 'update-role',
                'role_id' => 1,
                'created_at' => '2019-11-28 20:57:23',
                'updated_at' => '2019-11-28 20:57:23',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'delete-role',
                'slug' => 'delete-role',
                'description' => 'delete-role',
                'role_id' => 1,
                'created_at' => '2019-11-28 20:57:58',
                'updated_at' => '2019-11-28 20:57:58',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'index-permission',
                'slug' => 'index-permission',
                'description' => 'index-permission',
                'role_id' => 1,
                'created_at' => '2019-11-28 21:27:10',
                'updated_at' => '2019-11-28 21:27:10',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'create-permission',
                'slug' => 'create-permission',
                'description' => 'create-permission',
                'role_id' => 1,
                'created_at' => '2019-11-28 21:27:46',
                'updated_at' => '2019-11-28 21:27:46',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'view-permission',
                'slug' => 'view-permission',
                'description' => 'view-permission',
                'role_id' => 1,
                'created_at' => '2019-11-28 21:28:11',
                'updated_at' => '2019-11-28 21:28:11',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'update-permission',
                'slug' => 'update-permission',
                'description' => 'update-permission',
                'role_id' => 1,
                'created_at' => '2019-11-28 21:28:46',
                'updated_at' => '2019-11-28 21:28:46',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'delete-permission',
                'slug' => 'delete-permission',
                'description' => 'delete-permission',
                'role_id' => 1,
                'created_at' => '2019-11-28 21:29:22',
                'updated_at' => '2019-11-28 21:29:22',
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'index-person',
                'slug' => 'index-person',
                'description' => 'index-person',
                'role_id' => 1,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'create-person',
                'slug' => 'create-person',
                'description' => 'create-person',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'view-person',
                'slug' => 'view-person',
                'description' => 'view-person',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'update-person',
                'slug' => 'update-person',
                'description' => 'update-person',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'delete-person',
                'slug' => 'delete-person',
                'description' => 'delete-person',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'index-user',
                'slug' => 'index-user',
                'description' => 'index-user',
                'role_id' => 1,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'create-user',
                'slug' => 'create-user',
                'description' => 'create-user',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'view-user',
                'slug' => 'view-user',
                'description' => 'view-user',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'update-user',
                'slug' => 'update-user',
                'description' => 'update-user',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'assign-role-user',
                'slug' => 'assign-role-user',
                'description' => 'assign-role-user',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'assign-permission-user',
                'slug' => 'assign-permission-user',
                'description' => 'assign-permission-user',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'import-user',
                'slug' => 'import-user',
                'description' => 'import-user',
                'role_id' => 1,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            22 => 
            array (
                'id' => 24,
                'name' => 'index-search',
                'slug' => 'index-search',
                'description' => 'index-search',
                'role_id' => 1,
                'created_at' => '2019-12-04 14:26:13',
                'updated_at' => '2019-12-04 14:26:13',
            ),
            23 => 
            array (
                'id' => 25,
                'name' => 'view-search',
                'slug' => 'view-search',
                'description' => 'view-search',
                'role_id' => 1,
                'created_at' => '2019-12-04 14:28:03',
                'updated_at' => '2019-12-04 14:28:03',
            ),
        ));
        
        
    }
}