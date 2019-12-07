<?php

use Illuminate\Database\Seeder;

class NationalitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('nationalities')->delete();
        
        \DB::table('nationalities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'AFGANO',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}