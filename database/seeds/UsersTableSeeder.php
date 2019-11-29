<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Superadmin',
                'email' => 'ludiazoctavio@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$4fViT8hDNSCzzKjRJXkylu8wwX/GqQXK24Hpp9FUkCRDefRRO01pi',
                'remember_token' => NULL,
                'created_at' => '2019-11-27 17:04:58',
                'updated_at' => '2019-11-28 21:04:23',
                'last_name_1' => 'Desarrollo',
                'last_name_2' => 'ADIP',
                'position' => 'Desarrollador',
                'phone' => 12345678,
                'phone_extension' => NULL,
                'dependence_id' => 1,
                'ascription_id' => NULL,
                'deactivate' => false,
            ),
        ));
        
        
    }
}