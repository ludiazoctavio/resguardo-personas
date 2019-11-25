<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Superamin',
                'slug' => 'superamin',
                'description' => 'El todo poderoso',
                'created_at' => '2019-11-24 20:40:30',
                'updated_at' => '2019-11-24 20:40:30',
            ),
        ));
        
        
    }
}