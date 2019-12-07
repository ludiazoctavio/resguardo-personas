<?php

use Illuminate\Database\Seeder;

class IdentificationTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('identification_types')->delete();
        
        \DB::table('identification_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'CARTILLA SMN',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}