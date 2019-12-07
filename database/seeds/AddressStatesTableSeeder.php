<?php

use Illuminate\Database\Seeder;

class AddressStatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('address_states')->delete();
        
        \DB::table('address_states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'AGUASCALIENTES',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}