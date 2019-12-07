<?php

use Illuminate\Database\Seeder;

class ScholarshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('scholarships')->delete();
        
        \DB::table('scholarships')->insert(array (
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