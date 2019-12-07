<?php

use Illuminate\Database\Seeder;

class RelationshipsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('relationships')->delete();
        
        \DB::table('relationships')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ABUELA',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}