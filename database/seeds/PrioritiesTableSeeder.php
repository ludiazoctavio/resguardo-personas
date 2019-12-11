<?php

use Illuminate\Database\Seeder;

class PrioritiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('priorities')->delete();
        
        \DB::table('priorities')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Baja',
                'color' => '#84bf04',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Media',
                'color' => '#ff9914',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Alta',
                'color' => '#c72a2a',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}