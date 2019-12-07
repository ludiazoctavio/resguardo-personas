<?php

use Illuminate\Database\Seeder;

class PhysicalHealthsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('physical_healths')->delete();
        
        \DB::table('physical_healths')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'NINGUNA',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}