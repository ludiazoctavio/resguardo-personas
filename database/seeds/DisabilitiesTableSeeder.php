<?php

use Illuminate\Database\Seeder;

class DisabilitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('disabilities')->delete();
        
        \DB::table('disabilities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'INTELECTUAL',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}