<?php

use Illuminate\Database\Seeder;

class AddressCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('address_cities')->delete();
        
        \DB::table('address_cities')->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'AGUASCALIENTES',
                'inactive' => false,
                'state_id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}