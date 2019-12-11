<?php

use Illuminate\Database\Seeder;

class TypeRegistersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('type_registers')->delete();
        
        \DB::table('type_registers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Búsqueda',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Resguardo',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}