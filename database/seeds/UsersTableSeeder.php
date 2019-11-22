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
                'name' => 'Luis Octavio Diaz Neri',
                'email' => 'ludiazoctavio@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$CriggQWLmoIWTCenJYsW4uO/4vMhGKkn20QMum7CZBGLf8b6UKLWa',
                'remember_token' => NULL,
                'created_at' => '2019-11-21 16:23:16',
                'updated_at' => '2019-11-21 16:23:16',
            ),
        ));
        
        
    }
}