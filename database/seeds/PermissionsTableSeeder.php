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
            24 => 
            array (
                'id' => 26,
                'name' => 'index-person',
                'slug' => 'index-person',
                'description' => 'index-person',
                'role_id' => 2,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            25 => 
            array (
                'id' => 27,
                'name' => 'create-person',
                'slug' => 'create-person',
                'description' => 'create-person',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            26 => 
            array (
                'id' => 28,
                'name' => 'view-person',
                'slug' => 'view-person',
                'description' => 'view-person',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            27 => 
            array (
                'id' => 29,
                'name' => 'update-person',
                'slug' => 'update-person',
                'description' => 'update-person',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            28 => 
            array (
                'id' => 30,
                'name' => 'delete-person',
                'slug' => 'delete-person',
                'description' => 'delete-person',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            29 => 
            array (
                'id' => 31,
                'name' => 'index-user',
                'slug' => 'index-user',
                'description' => 'index-user',
                'role_id' => 2,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            30 => 
            array (
                'id' => 32,
                'name' => 'create-user',
                'slug' => 'create-user',
                'description' => 'create-user',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            31 => 
            array (
                'id' => 33,
                'name' => 'view-user',
                'slug' => 'view-user',
                'description' => 'view-user',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            32 => 
            array (
                'id' => 34,
                'name' => 'update-user',
                'slug' => 'update-user',
                'description' => 'update-user',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            33 => 
            array (
                'id' => 35,
                'name' => 'assign-role-user',
                'slug' => 'assign-role-user',
                'description' => 'assign-role-user',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            34 => 
            array (
                'id' => 36,
                'name' => 'assign-permission-user',
                'slug' => 'assign-permission-user',
                'description' => 'assign-permission-user',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            35 => 
            array (
                'id' => 37,
                'name' => 'import-user',
                'slug' => 'import-user',
                'description' => 'import-user',
                'role_id' => 2,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            36 => 
            array (
                'id' => 38,
                'name' => 'index-search',
                'slug' => 'index-search',
                'description' => 'index-search',
                'role_id' => 2,
                'created_at' => '2019-12-04 14:26:13',
                'updated_at' => '2019-12-04 14:26:13',
            ),
            37 => 
            array (
                'id' => 39,
                'name' => 'view-search',
                'slug' => 'view-search',
                'description' => 'view-search',
                'role_id' => 2,
                'created_at' => '2019-12-04 14:28:03',
                'updated_at' => '2019-12-04 14:28:03',
            ),
            38 => 
            array (
                'id' => 40,
                'name' => 'index-person',
                'slug' => 'index-person',
                'description' => 'index-person',
                'role_id' => 3,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            39 => 
            array (
                'id' => 41,
                'name' => 'create-person',
                'slug' => 'create-person',
                'description' => 'create-person',
                'role_id' => 3,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            40 => 
            array (
                'id' => 42,
                'name' => 'view-person',
                'slug' => 'view-person',
                'description' => 'view-person',
                'role_id' => 3,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            41 => 
            array (
                'id' => 43,
                'name' => 'update-person',
                'slug' => 'update-person',
                'description' => 'update-person',
                'role_id' => 3,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            42 => 
            array (
                'id' => 44,
                'name' => 'delete-person',
                'slug' => 'delete-person',
                'description' => 'delete-person',
                'role_id' => 3,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            43 => 
            array (
                'id' => 45,
                'name' => 'index-search',
                'slug' => 'index-search',
                'description' => 'index-search',
                'role_id' => 3,
                'created_at' => '2019-12-04 14:26:13',
                'updated_at' => '2019-12-04 14:26:13',
            ),
            44 => 
            array (
                'id' => 46,
                'name' => 'view-search',
                'slug' => 'view-search',
                'description' => 'view-search',
                'role_id' => 3,
                'created_at' => '2019-12-04 14:28:03',
                'updated_at' => '2019-12-04 14:28:03',
            ),
            45 => 
            array (
                'id' => 47,
                'name' => 'index-person',
                'slug' => 'index-person',
                'description' => 'index-person',
                'role_id' => 4,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            46 => 
            array (
                'id' => 48,
                'name' => 'create-person',
                'slug' => 'create-person',
                'description' => 'create-person',
                'role_id' => 4,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            47 => 
            array (
                'id' => 49,
                'name' => 'view-person',
                'slug' => 'view-person',
                'description' => 'view-person',
                'role_id' => 4,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            48 => 
            array (
                'id' => 50,
                'name' => 'update-person',
                'slug' => 'update-person',
                'description' => 'update-person',
                'role_id' => 4,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            49 => 
            array (
                'id' => 51,
                'name' => 'delete-person',
                'slug' => 'delete-person',
                'description' => 'delete-person',
                'role_id' => 4,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            50 => 
            array (
                'id' => 52,
                'name' => 'index-search',
                'slug' => 'index-search',
                'description' => 'index-search',
                'role_id' => 4,
                'created_at' => '2019-12-04 14:26:13',
                'updated_at' => '2019-12-04 14:26:13',
            ),
            51 => 
            array (
                'id' => 53,
                'name' => 'view-search',
                'slug' => 'view-search',
                'description' => 'view-search',
                'role_id' => 4,
                'created_at' => '2019-12-04 14:28:03',
                'updated_at' => '2019-12-04 14:28:03',
            ),
            52 => 
            array (
                'id' => 54,
                'name' => 'index-person',
                'slug' => 'index-person',
                'description' => 'index-person',
                'role_id' => 5,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            53 => 
            array (
                'id' => 55,
                'name' => 'create-person',
                'slug' => 'create-person',
                'description' => 'create-person',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            54 => 
            array (
                'id' => 56,
                'name' => 'view-person',
                'slug' => 'view-person',
                'description' => 'view-person',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            55 => 
            array (
                'id' => 57,
                'name' => 'update-person',
                'slug' => 'update-person',
                'description' => 'update-person',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            56 => 
            array (
                'id' => 58,
                'name' => 'delete-person',
                'slug' => 'delete-person',
                'description' => 'delete-person',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            57 => 
            array (
                'id' => 59,
                'name' => 'index-user',
                'slug' => 'index-user',
                'description' => 'index-user',
                'role_id' => 5,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            58 => 
            array (
                'id' => 60,
                'name' => 'create-user',
                'slug' => 'create-user',
                'description' => 'create-user',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            59 => 
            array (
                'id' => 61,
                'name' => 'view-user',
                'slug' => 'view-user',
                'description' => 'view-user',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            60 => 
            array (
                'id' => 62,
                'name' => 'update-user',
                'slug' => 'update-user',
                'description' => 'update-user',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            61 => 
            array (
                'id' => 63,
                'name' => 'assign-role-user',
                'slug' => 'assign-role-user',
                'description' => 'assign-role-user',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            62 => 
            array (
                'id' => 64,
                'name' => 'assign-permission-user',
                'slug' => 'assign-permission-user',
                'description' => 'assign-permission-user',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            63 => 
            array (
                'id' => 65,
                'name' => 'import-user',
                'slug' => 'import-user',
                'description' => 'import-user',
                'role_id' => 5,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            64 => 
            array (
                'id' => 66,
                'name' => 'index-search',
                'slug' => 'index-search',
                'description' => 'index-search',
                'role_id' => 5,
                'created_at' => '2019-12-04 14:26:13',
                'updated_at' => '2019-12-04 14:26:13',
            ),
            65 => 
            array (
                'id' => 67,
                'name' => 'view-search',
                'slug' => 'view-search',
                'description' => 'view-search',
                'role_id' => 5,
                'created_at' => '2019-12-04 14:28:03',
                'updated_at' => '2019-12-04 14:28:03',
            ),
            66 => 
            array (
                'id' => 68,
                'name' => 'index-person',
                'slug' => 'index-person',
                'description' => 'index-person',
                'role_id' => 6,
                'created_at' => '2019-11-28 21:35:54',
                'updated_at' => '2019-11-28 21:35:54',
            ),
            67 => 
            array (
                'id' => 69,
                'name' => 'create-person',
                'slug' => 'create-person',
                'description' => 'create-person',
                'role_id' => 6,
                'created_at' => '2019-11-28 22:05:28',
                'updated_at' => '2019-11-28 22:05:28',
            ),
            68 => 
            array (
                'id' => 70,
                'name' => 'view-person',
                'slug' => 'view-person',
                'description' => 'view-person',
                'role_id' => 6,
                'created_at' => '2019-11-28 22:38:07',
                'updated_at' => '2019-11-28 22:38:07',
            ),
            69 => 
            array (
                'id' => 71,
                'name' => 'update-person',
                'slug' => 'update-person',
                'description' => 'update-person',
                'role_id' => 6,
                'created_at' => '2019-11-28 22:38:34',
                'updated_at' => '2019-11-28 22:38:34',
            ),
            70 => 
            array (
                'id' => 72,
                'name' => 'delete-person',
                'slug' => 'delete-person',
                'description' => 'delete-person',
                'role_id' => 6,
                'created_at' => '2019-11-28 22:38:50',
                'updated_at' => '2019-11-28 22:38:50',
            ),
            71 => 
            array (
                'id' => 73,
                'name' => 'index-search',
                'slug' => 'index-search',
                'description' => 'index-search',
                'role_id' => 6,
                'created_at' => '2019-12-04 14:26:13',
                'updated_at' => '2019-12-04 14:26:13',
            ),
            72 => 
            array (
                'id' => 74,
                'name' => 'view-search',
                'slug' => 'view-search',
                'description' => 'view-search',
                'role_id' => 6,
                'created_at' => '2019-12-04 14:28:03',
                'updated_at' => '2019-12-04 14:28:03',
            ),
        ));
    }
}