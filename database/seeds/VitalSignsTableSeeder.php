<?php

use Illuminate\Database\Seeder;

class VitalSignsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vital_signs')->delete();
        
        \DB::table('vital_signs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Sí',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'No',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}