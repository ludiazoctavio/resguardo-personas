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
                'name' => 'Octavio Diaz',
                'email' => 'ludiazoctavio@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3IBF96MKm.nKU/9ft7vetuDu/nb.2jxPAjIEwiYu0GkXjRMNO7pBG',
                'remember_token' => NULL,
                'created_at' => '2019-11-25 10:39:06',
                'updated_at' => '2019-11-25 10:39:06',
            ),
        ));
        
        
    }
}