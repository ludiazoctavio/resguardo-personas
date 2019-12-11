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
                'code' => '01',
                'name' => 'Aguascalientes',
                'abbreviation' => 'Ags.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '02',
                'name' => 'Baja California',
                'abbreviation' => 'BC',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '03',
                'name' => 'Baja California Sur',
                'abbreviation' => 'BCS',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '04',
                'name' => 'Campeche',
                'abbreviation' => 'Camp.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '05',
                'name' => 'Coahuila de Zaragoza',
                'abbreviation' => 'Coah.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '06',
                'name' => 'Colima',
                'abbreviation' => 'Col.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '07',
                'name' => 'Chiapas',
                'abbreviation' => 'Chis.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '08',
                'name' => 'Chihuahua',
                'abbreviation' => 'Chih.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '09',
                'name' => 'Ciudad de México',
                'abbreviation' => 'CDMX',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '10',
                'name' => 'Durango',
                'abbreviation' => 'Dgo.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '11',
                'name' => 'Guanajuato',
                'abbreviation' => 'Gto.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '12',
                'name' => 'Guerrero',
                'abbreviation' => 'Gro.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '13',
                'name' => 'Hidalgo',
                'abbreviation' => 'Hgo.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '14',
                'name' => 'Jalisco',
                'abbreviation' => 'Jal.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '15',
                'name' => 'México',
                'abbreviation' => 'Mex.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '16',
                'name' => 'Michoacán de Ocampo',
                'abbreviation' => 'Mich.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '17',
                'name' => 'Morelos',
                'abbreviation' => 'Mor.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '18',
                'name' => 'Nayarit',
                'abbreviation' => 'Nay.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '19',
                'name' => 'Nuevo León',
                'abbreviation' => 'NL',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '20',
                'name' => 'Oaxaca',
                'abbreviation' => 'Oax.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '21',
                'name' => 'Puebla',
                'abbreviation' => 'Pue.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '22',
                'name' => 'Querétaro',
                'abbreviation' => 'Qro.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '23',
                'name' => 'Quintana Roo',
                'abbreviation' => 'Q. Roo',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '24',
                'name' => 'San Luis Potosí',
                'abbreviation' => 'SLP',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '25',
                'name' => 'Sinaloa',
                'abbreviation' => 'Sin.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '26',
                'name' => 'Sonora',
                'abbreviation' => 'Son.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '27',
                'name' => 'Tabasco',
                'abbreviation' => 'Tab.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '28',
                'name' => 'Tamaulipas',
                'abbreviation' => 'Tamps.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '29',
                'name' => 'Tlaxcala',
                'abbreviation' => 'Tlax.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '30',
                'name' => 'Veracruz de Ignacio de la Llave',
                'abbreviation' => 'Ver.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '31',
                'name' => 'Yucatán',
                'abbreviation' => 'Yuc.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '32',
                'name' => 'Zacatecas',
                'abbreviation' => 'Zac.',
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}