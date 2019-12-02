<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('genders')->delete();
        
        \DB::table('genders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MASCULINO',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'FEMENINO',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}