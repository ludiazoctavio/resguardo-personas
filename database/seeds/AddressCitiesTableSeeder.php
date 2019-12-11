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
                'id' => 1,
                'code' => '001',
                'name' => 'Aguascalientes',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'code' => '002',
                'name' => 'Asientos',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'code' => '003',
                'name' => 'Calvillo',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'code' => '004',
                'name' => 'Cosío',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'code' => '005',
                'name' => 'Jesús María',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'code' => '006',
                'name' => 'Pabellón de Arteaga',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'code' => '007',
                'name' => 'Rincón de Romos',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'code' => '008',
                'name' => 'San José de Gracia',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'code' => '009',
                'name' => 'Tepezalá',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'code' => '010',
                'name' => 'El Llano',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'code' => '011',
                'name' => 'San Francisco de los Romo',
                'state_id' => 1,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'code' => '001',
                'name' => 'Ensenada',
                'state_id' => 2,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'code' => '002',
                'name' => 'Mexicali',
                'state_id' => 2,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'code' => '003',
                'name' => 'Tecate',
                'state_id' => 2,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'code' => '004',
                'name' => 'Tijuana',
                'state_id' => 2,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'code' => '005',
                'name' => 'Playas de Rosarito',
                'state_id' => 2,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'code' => '001',
                'name' => 'Comondú',
                'state_id' => 3,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'code' => '002',
                'name' => 'Mulegé',
                'state_id' => 3,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'code' => '003',
                'name' => 'La Paz',
                'state_id' => 3,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'code' => '008',
                'name' => 'Los Cabos',
                'state_id' => 3,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'code' => '009',
                'name' => 'Loreto',
                'state_id' => 3,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'code' => '001',
                'name' => 'Calkiní',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'code' => '002',
                'name' => 'Campeche',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'code' => '003',
                'name' => 'Carmen',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'code' => '004',
                'name' => 'Champotón',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'code' => '005',
                'name' => 'Hecelchakán',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'code' => '006',
                'name' => 'Hopelchén',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'code' => '007',
                'name' => 'Palizada',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'code' => '008',
                'name' => 'Tenabo',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'code' => '009',
                'name' => 'Escárcega',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'code' => '010',
                'name' => 'Calakmul',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'code' => '011',
                'name' => 'Candelaria',
                'state_id' => 4,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'code' => '001',
                'name' => 'Abasolo',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'code' => '002',
                'name' => 'Acuña',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'code' => '003',
                'name' => 'Allende',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'code' => '004',
                'name' => 'Arteaga',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'code' => '005',
                'name' => 'Candela',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'code' => '006',
                'name' => 'Castaños',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'code' => '007',
                'name' => 'Cuatro Ciénegas',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'code' => '008',
                'name' => 'Escobedo',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'code' => '009',
                'name' => 'Francisco I. Madero',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'code' => '010',
                'name' => 'Frontera',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'code' => '011',
                'name' => 'General Cepeda',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'code' => '012',
                'name' => 'Guerrero',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'code' => '013',
                'name' => 'Hidalgo',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'code' => '014',
                'name' => 'Jiménez',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'code' => '015',
                'name' => 'Juárez',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'code' => '016',
                'name' => 'Lamadrid',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'code' => '017',
                'name' => 'Matamoros',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'code' => '018',
                'name' => 'Monclova',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'code' => '019',
                'name' => 'Morelos',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'code' => '020',
                'name' => 'Múzquiz',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'code' => '021',
                'name' => 'Nadadores',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'code' => '022',
                'name' => 'Nava',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'code' => '023',
                'name' => 'Ocampo',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'code' => '024',
                'name' => 'Parras',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'code' => '025',
                'name' => 'Piedras Negras',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'code' => '026',
                'name' => 'Progreso',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'code' => '027',
                'name' => 'Ramos Arizpe',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'code' => '028',
                'name' => 'Sabinas',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'code' => '029',
                'name' => 'Sacramento',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'code' => '030',
                'name' => 'Saltillo',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'code' => '031',
                'name' => 'San Buenaventura',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'code' => '032',
                'name' => 'San Juan de Sabinas',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'code' => '033',
                'name' => 'San Pedro',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'code' => '034',
                'name' => 'Sierra Mojada',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'code' => '035',
                'name' => 'Torreón',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'code' => '036',
                'name' => 'Viesca',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'code' => '037',
                'name' => 'Villa Unión',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'code' => '038',
                'name' => 'Zaragoza',
                'state_id' => 5,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'code' => '001',
                'name' => 'Armería',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'code' => '002',
                'name' => 'Colima',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'code' => '003',
                'name' => 'Comala',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'code' => '004',
                'name' => 'Coquimatlán',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'code' => '005',
                'name' => 'Cuauhtémoc',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'code' => '006',
                'name' => 'Ixtlahuacán',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'code' => '007',
                'name' => 'Manzanillo',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'code' => '008',
                'name' => 'Minatitlán',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'code' => '009',
                'name' => 'Tecomán',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'code' => '010',
                'name' => 'Villa de Álvarez',
                'state_id' => 6,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'code' => '001',
                'name' => 'Acacoyagua',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'code' => '002',
                'name' => 'Acala',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'code' => '003',
                'name' => 'Acapetahua',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'code' => '004',
                'name' => 'Altamirano',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'code' => '005',
                'name' => 'Amatán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'code' => '006',
                'name' => 'Amatenango de la Frontera',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'code' => '007',
                'name' => 'Amatenango del Valle',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'code' => '008',
                'name' => 'Angel Albino Corzo',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'code' => '009',
                'name' => 'Arriaga',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'code' => '010',
                'name' => 'Bejucal de Ocampo',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'code' => '011',
                'name' => 'Bella Vista',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'code' => '012',
                'name' => 'Berriozábal',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'code' => '013',
                'name' => 'Bochil',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'code' => '014',
                'name' => 'El Bosque',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'code' => '015',
                'name' => 'Cacahoatán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'code' => '016',
                'name' => 'Catazajá',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'code' => '017',
                'name' => 'Cintalapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'code' => '018',
                'name' => 'Coapilla',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'code' => '019',
                'name' => 'Comitán de Domínguez',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'code' => '020',
                'name' => 'La Concordia',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'code' => '021',
                'name' => 'Copainalá',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'code' => '022',
                'name' => 'Chalchihuitán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'code' => '023',
                'name' => 'Chamula',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'code' => '024',
                'name' => 'Chanal',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'code' => '025',
                'name' => 'Chapultenango',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'code' => '026',
                'name' => 'Chenalhó',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'code' => '027',
                'name' => 'Chiapa de Corzo',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'code' => '028',
                'name' => 'Chiapilla',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'code' => '029',
                'name' => 'Chicoasén',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'code' => '030',
                'name' => 'Chicomuselo',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'code' => '031',
                'name' => 'Chilón',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'code' => '032',
                'name' => 'Escuintla',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'code' => '033',
                'name' => 'Francisco León',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'code' => '034',
                'name' => 'Frontera Comalapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'code' => '035',
                'name' => 'Frontera Hidalgo',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'code' => '036',
                'name' => 'La Grandeza',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'code' => '037',
                'name' => 'Huehuetán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 118,
                'code' => '038',
                'name' => 'Huixtán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 119,
                'code' => '039',
                'name' => 'Huitiupán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 120,
                'code' => '040',
                'name' => 'Huixtla',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 121,
                'code' => '041',
                'name' => 'La Independencia',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 122,
                'code' => '042',
                'name' => 'Ixhuatán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 123,
                'code' => '043',
                'name' => 'Ixtacomitán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 124,
                'code' => '044',
                'name' => 'Ixtapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 125,
                'code' => '045',
                'name' => 'Ixtapangajoya',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 126,
                'code' => '046',
                'name' => 'Jiquipilas',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 127,
                'code' => '047',
                'name' => 'Jitotol',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 128,
                'code' => '048',
                'name' => 'Juárez',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 129,
                'code' => '049',
                'name' => 'Larráinzar',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 130,
                'code' => '050',
                'name' => 'La Libertad',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 131,
                'code' => '051',
                'name' => 'Mapastepec',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 132,
                'code' => '052',
                'name' => 'Las Margaritas',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 133,
                'code' => '053',
                'name' => 'Mazapa de Madero',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 134,
                'code' => '054',
                'name' => 'Mazatán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 135,
                'code' => '055',
                'name' => 'Metapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 136,
                'code' => '056',
                'name' => 'Mitontic',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 137,
                'code' => '057',
                'name' => 'Motozintla',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 138,
                'code' => '058',
                'name' => 'Nicolás Ruíz',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 139,
                'code' => '059',
                'name' => 'Ocosingo',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 140,
                'code' => '060',
                'name' => 'Ocotepec',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 141,
                'code' => '061',
                'name' => 'Ocozocoautla de Espinosa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 142,
                'code' => '062',
                'name' => 'Ostuacán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 143,
                'code' => '063',
                'name' => 'Osumacinta',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 144,
                'code' => '064',
                'name' => 'Oxchuc',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 145,
                'code' => '065',
                'name' => 'Palenque',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 146,
                'code' => '066',
                'name' => 'Pantelhó',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 147,
                'code' => '067',
                'name' => 'Pantepec',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 148,
                'code' => '068',
                'name' => 'Pichucalco',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 149,
                'code' => '069',
                'name' => 'Pijijiapan',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 150,
                'code' => '070',
                'name' => 'El Porvenir',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 151,
                'code' => '071',
                'name' => 'Villa Comaltitlán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 152,
                'code' => '072',
                'name' => 'Pueblo Nuevo Solistahuacán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 153,
                'code' => '073',
                'name' => 'Rayón',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 154,
                'code' => '074',
                'name' => 'Reforma',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 155,
                'code' => '075',
                'name' => 'Las Rosas',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 156,
                'code' => '076',
                'name' => 'Sabanilla',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 157,
                'code' => '077',
                'name' => 'Salto de Agua',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 158,
                'code' => '078',
                'name' => 'San Cristóbal de las Casas',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 159,
                'code' => '079',
                'name' => 'San Fernando',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 160,
                'code' => '080',
                'name' => 'Siltepec',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 161,
                'code' => '081',
                'name' => 'Simojovel',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 162,
                'code' => '082',
                'name' => 'Sitalá',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 163,
                'code' => '083',
                'name' => 'Socoltenango',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 164,
                'code' => '084',
                'name' => 'Solosuchiapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 165,
                'code' => '085',
                'name' => 'Soyaló',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 166,
                'code' => '086',
                'name' => 'Suchiapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 167,
                'code' => '087',
                'name' => 'Suchiate',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 168,
                'code' => '088',
                'name' => 'Sunuapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 169,
                'code' => '089',
                'name' => 'Tapachula',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 170,
                'code' => '090',
                'name' => 'Tapalapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 171,
                'code' => '091',
                'name' => 'Tapilula',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 172,
                'code' => '092',
                'name' => 'Tecpatán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 173,
                'code' => '093',
                'name' => 'Tenejapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 174,
                'code' => '094',
                'name' => 'Teopisca',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 175,
                'code' => '096',
                'name' => 'Tila',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 176,
                'code' => '097',
                'name' => 'Tonalá',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 177,
                'code' => '098',
                'name' => 'Totolapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 178,
                'code' => '099',
                'name' => 'La Trinitaria',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 179,
                'code' => '100',
                'name' => 'Tumbalá',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 180,
                'code' => '101',
                'name' => 'Tuxtla Gutiérrez',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 181,
                'code' => '102',
                'name' => 'Tuxtla Chico',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 182,
                'code' => '103',
                'name' => 'Tuzantán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 183,
                'code' => '104',
                'name' => 'Tzimol',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 184,
                'code' => '105',
                'name' => 'Unión Juárez',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 185,
                'code' => '106',
                'name' => 'Venustiano Carranza',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 186,
                'code' => '107',
                'name' => 'Villa Corzo',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 187,
                'code' => '108',
                'name' => 'Villaflores',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 188,
                'code' => '109',
                'name' => 'Yajalón',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 189,
                'code' => '110',
                'name' => 'San Lucas',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 190,
                'code' => '111',
                'name' => 'Zinacantán',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 191,
                'code' => '112',
                'name' => 'San Juan Cancuc',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 192,
                'code' => '113',
                'name' => 'Aldama',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 193,
                'code' => '114',
                'name' => 'Benemérito de las Américas',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 194,
                'code' => '115',
                'name' => 'Maravilla Tenejapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 195,
                'code' => '116',
                'name' => 'Marqués de Comillas',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 196,
                'code' => '117',
                'name' => 'Montecristo de Guerrero',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 197,
                'code' => '118',
                'name' => 'San Andrés Duraznal',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 198,
                'code' => '119',
                'name' => 'Santiago el Pinar',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 199,
                'code' => '120',
                'name' => 'Capitán Luis Ángel Vidal',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 200,
                'code' => '121',
                'name' => 'Rincón Chamula San Pedro',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 201,
                'code' => '122',
                'name' => 'El Parral',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 202,
                'code' => '123',
                'name' => 'Emiliano Zapata',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 203,
                'code' => '124',
                'name' => 'Mezcalapa',
                'state_id' => 7,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 204,
                'code' => '001',
                'name' => 'Ahumada',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 205,
                'code' => '002',
                'name' => 'Aldama',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 206,
                'code' => '003',
                'name' => 'Allende',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 207,
                'code' => '004',
                'name' => 'Aquiles Serdán',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 208,
                'code' => '005',
                'name' => 'Ascensión',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 209,
                'code' => '006',
                'name' => 'Bachíniva',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 210,
                'code' => '007',
                'name' => 'Balleza',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 211,
                'code' => '008',
                'name' => 'Batopilas de Manuel Gómez Morín',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 212,
                'code' => '009',
                'name' => 'Bocoyna',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 213,
                'code' => '010',
                'name' => 'Buenaventura',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 214,
                'code' => '011',
                'name' => 'Camargo',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 215,
                'code' => '012',
                'name' => 'Carichí',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 216,
                'code' => '013',
                'name' => 'Casas Grandes',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 217,
                'code' => '014',
                'name' => 'Coronado',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 218,
                'code' => '015',
                'name' => 'Coyame del Sotol',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 219,
                'code' => '016',
                'name' => 'La Cruz',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 220,
                'code' => '017',
                'name' => 'Cuauhtémoc',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 221,
                'code' => '018',
                'name' => 'Cusihuiriachi',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 222,
                'code' => '019',
                'name' => 'Chihuahua',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 223,
                'code' => '020',
                'name' => 'Chínipas',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 224,
                'code' => '021',
                'name' => 'Delicias',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 225,
                'code' => '022',
                'name' => 'Dr. Belisario Domínguez',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 226,
                'code' => '023',
                'name' => 'Galeana',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 227,
                'code' => '024',
                'name' => 'Santa Isabel',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 228,
                'code' => '025',
                'name' => 'Gómez Farías',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 229,
                'code' => '026',
                'name' => 'Gran Morelos',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 230,
                'code' => '027',
                'name' => 'Guachochi',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 231,
                'code' => '028',
                'name' => 'Guadalupe',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 232,
                'code' => '029',
                'name' => 'Guadalupe y Calvo',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 233,
                'code' => '030',
                'name' => 'Guazapares',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 234,
                'code' => '031',
                'name' => 'Guerrero',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 235,
                'code' => '032',
                'name' => 'Hidalgo del Parral',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 236,
                'code' => '033',
                'name' => 'Huejotitán',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 237,
                'code' => '034',
                'name' => 'Ignacio Zaragoza',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 238,
                'code' => '035',
                'name' => 'Janos',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 239,
                'code' => '036',
                'name' => 'Jiménez',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 240,
                'code' => '037',
                'name' => 'Juárez',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 241,
                'code' => '038',
                'name' => 'Julimes',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 242,
                'code' => '039',
                'name' => 'López',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 243,
                'code' => '040',
                'name' => 'Madera',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 244,
                'code' => '041',
                'name' => 'Maguarichi',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 245,
                'code' => '042',
                'name' => 'Manuel Benavides',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 246,
                'code' => '043',
                'name' => 'Matachí',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 247,
                'code' => '044',
                'name' => 'Matamoros',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 248,
                'code' => '045',
                'name' => 'Meoqui',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 249,
                'code' => '046',
                'name' => 'Morelos',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 250,
                'code' => '047',
                'name' => 'Moris',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 251,
                'code' => '048',
                'name' => 'Namiquipa',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 252,
                'code' => '049',
                'name' => 'Nonoava',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 253,
                'code' => '050',
                'name' => 'Nuevo Casas Grandes',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 254,
                'code' => '051',
                'name' => 'Ocampo',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 255,
                'code' => '052',
                'name' => 'Ojinaga',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 256,
                'code' => '053',
                'name' => 'Praxedis G. Guerrero',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 257,
                'code' => '054',
                'name' => 'Riva Palacio',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 258,
                'code' => '055',
                'name' => 'Rosales',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 259,
                'code' => '056',
                'name' => 'Rosario',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 260,
                'code' => '057',
                'name' => 'San Francisco de Borja',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 261,
                'code' => '058',
                'name' => 'San Francisco de Conchos',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 262,
                'code' => '059',
                'name' => 'San Francisco del Oro',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 263,
                'code' => '060',
                'name' => 'Santa Bárbara',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 264,
                'code' => '061',
                'name' => 'Satevó',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 265,
                'code' => '062',
                'name' => 'Saucillo',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 266,
                'code' => '063',
                'name' => 'Temósachic',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 267,
                'code' => '064',
                'name' => 'El Tule',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 268,
                'code' => '065',
                'name' => 'Urique',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 269,
                'code' => '066',
                'name' => 'Uruachi',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 270,
                'code' => '067',
                'name' => 'Valle de Zaragoza',
                'state_id' => 8,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 271,
                'code' => '002',
                'name' => 'Azcapotzalco',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 272,
                'code' => '003',
                'name' => 'Coyoacán',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 273,
                'code' => '004',
                'name' => 'Cuajimalpa de Morelos',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 274,
                'code' => '005',
                'name' => 'Gustavo A. Madero',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 275,
                'code' => '006',
                'name' => 'Iztacalco',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 276,
                'code' => '007',
                'name' => 'Iztapalapa',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 277,
                'code' => '008',
                'name' => 'La Magdalena Contreras',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 278,
                'code' => '009',
                'name' => 'Milpa Alta',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 279,
                'code' => '010',
                'name' => 'Álvaro Obregón',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 280,
                'code' => '011',
                'name' => 'Tláhuac',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 281,
                'code' => '012',
                'name' => 'Tlalpan',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 282,
                'code' => '013',
                'name' => 'Xochimilco',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 283,
                'code' => '014',
                'name' => 'Benito Juárez',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 284,
                'code' => '015',
                'name' => 'Cuauhtémoc',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 285,
                'code' => '016',
                'name' => 'Miguel Hidalgo',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 286,
                'code' => '017',
                'name' => 'Venustiano Carranza',
                'state_id' => 9,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 287,
                'code' => '001',
                'name' => 'Canatlán',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 288,
                'code' => '002',
                'name' => 'Canelas',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 289,
                'code' => '003',
                'name' => 'Coneto de Comonfort',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 290,
                'code' => '004',
                'name' => 'Cuencamé',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 291,
                'code' => '005',
                'name' => 'Durango',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 292,
                'code' => '006',
                'name' => 'General Simón Bolívar',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 293,
                'code' => '007',
                'name' => 'Gómez Palacio',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 294,
                'code' => '008',
                'name' => 'Guadalupe Victoria',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 295,
                'code' => '009',
                'name' => 'Guanaceví',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 296,
                'code' => '010',
                'name' => 'Hidalgo',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 297,
                'code' => '011',
                'name' => 'Indé',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 298,
                'code' => '012',
                'name' => 'Lerdo',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 299,
                'code' => '013',
                'name' => 'Mapimí',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 300,
                'code' => '014',
                'name' => 'Mezquital',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 301,
                'code' => '015',
                'name' => 'Nazas',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 302,
                'code' => '016',
                'name' => 'Nombre de Dios',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 303,
                'code' => '017',
                'name' => 'Ocampo',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 304,
                'code' => '018',
                'name' => 'El Oro',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 305,
                'code' => '019',
                'name' => 'Otáez',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 306,
                'code' => '020',
                'name' => 'Pánuco de Coronado',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 307,
                'code' => '021',
                'name' => 'Peñón Blanco',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 308,
                'code' => '022',
                'name' => 'Poanas',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 309,
                'code' => '023',
                'name' => 'Pueblo Nuevo',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 310,
                'code' => '024',
                'name' => 'Rodeo',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 311,
                'code' => '025',
                'name' => 'San Bernardo',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 312,
                'code' => '026',
                'name' => 'San Dimas',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 313,
                'code' => '027',
                'name' => 'San Juan de Guadalupe',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 314,
                'code' => '028',
                'name' => 'San Juan del Río',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 315,
                'code' => '029',
                'name' => 'San Luis del Cordero',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 316,
                'code' => '030',
                'name' => 'San Pedro del Gallo',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 317,
                'code' => '031',
                'name' => 'Santa Clara',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 318,
                'code' => '032',
                'name' => 'Santiago Papasquiaro',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 319,
                'code' => '033',
                'name' => 'Súchil',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 320,
                'code' => '034',
                'name' => 'Tamazula',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 321,
                'code' => '035',
                'name' => 'Tepehuanes',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 322,
                'code' => '036',
                'name' => 'Tlahualilo',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 323,
                'code' => '037',
                'name' => 'Topia',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 324,
                'code' => '038',
                'name' => 'Vicente Guerrero',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 325,
                'code' => '039',
                'name' => 'Nuevo Ideal',
                'state_id' => 10,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 326,
                'code' => '001',
                'name' => 'Abasolo',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 327,
                'code' => '002',
                'name' => 'Acámbaro',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 328,
                'code' => '003',
                'name' => 'San Miguel de Allende',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 329,
                'code' => '004',
                'name' => 'Apaseo el Alto',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 330,
                'code' => '005',
                'name' => 'Apaseo el Grande',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 331,
                'code' => '006',
                'name' => 'Atarjea',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 332,
                'code' => '007',
                'name' => 'Celaya',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 333,
                'code' => '008',
                'name' => 'Manuel Doblado',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 334,
                'code' => '009',
                'name' => 'Comonfort',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 335,
                'code' => '010',
                'name' => 'Coroneo',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 336,
                'code' => '011',
                'name' => 'Cortazar',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 337,
                'code' => '012',
                'name' => 'Cuerámaro',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 338,
                'code' => '013',
                'name' => 'Doctor Mora',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 339,
                'code' => '014',
                'name' => 'Dolores Hidalgo Cuna de la Independencia Nacional',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 340,
                'code' => '015',
                'name' => 'Guanajuato',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 341,
                'code' => '016',
                'name' => 'Huanímaro',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 342,
                'code' => '017',
                'name' => 'Irapuato',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 343,
                'code' => '018',
                'name' => 'Jaral del Progreso',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 344,
                'code' => '019',
                'name' => 'Jerécuaro',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 345,
                'code' => '020',
                'name' => 'León',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 346,
                'code' => '021',
                'name' => 'Moroleón',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 347,
                'code' => '022',
                'name' => 'Ocampo',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 348,
                'code' => '023',
                'name' => 'Pénjamo',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 349,
                'code' => '024',
                'name' => 'Pueblo Nuevo',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 350,
                'code' => '025',
                'name' => 'Purísima del Rincón',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 351,
                'code' => '026',
                'name' => 'Romita',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 352,
                'code' => '027',
                'name' => 'Salamanca',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 353,
                'code' => '028',
                'name' => 'Salvatierra',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 354,
                'code' => '029',
                'name' => 'San Diego de la Unión',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 355,
                'code' => '030',
                'name' => 'San Felipe',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 356,
                'code' => '031',
                'name' => 'San Francisco del Rincón',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 357,
                'code' => '032',
                'name' => 'San José Iturbide',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 358,
                'code' => '033',
                'name' => 'San Luis de la Paz',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 359,
                'code' => '034',
                'name' => 'Santa Catarina',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 360,
                'code' => '035',
                'name' => 'Santa Cruz de Juventino Rosas',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 361,
                'code' => '036',
                'name' => 'Santiago Maravatío',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 362,
                'code' => '037',
                'name' => 'Silao de la Victoria',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 363,
                'code' => '038',
                'name' => 'Tarandacuao',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 364,
                'code' => '039',
                'name' => 'Tarimoro',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 365,
                'code' => '040',
                'name' => 'Tierra Blanca',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 366,
                'code' => '041',
                'name' => 'Uriangato',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 367,
                'code' => '042',
                'name' => 'Valle de Santiago',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 368,
                'code' => '043',
                'name' => 'Victoria',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 369,
                'code' => '044',
                'name' => 'Villagrán',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 370,
                'code' => '045',
                'name' => 'Xichú',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 371,
                'code' => '046',
                'name' => 'Yuriria',
                'state_id' => 11,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 372,
                'code' => '001',
                'name' => 'Acapulco de Juárez',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 373,
                'code' => '002',
                'name' => 'Ahuacuotzingo',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 374,
                'code' => '003',
                'name' => 'Ajuchitlán del Progreso',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 375,
                'code' => '004',
                'name' => 'Alcozauca de Guerrero',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 376,
                'code' => '005',
                'name' => 'Alpoyeca',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 377,
                'code' => '006',
                'name' => 'Apaxtla',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 378,
                'code' => '007',
                'name' => 'Arcelia',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 379,
                'code' => '008',
                'name' => 'Atenango del Río',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 380,
                'code' => '009',
                'name' => 'Atlamajalcingo del Monte',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 381,
                'code' => '010',
                'name' => 'Atlixtac',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 382,
                'code' => '011',
                'name' => 'Atoyac de Álvarez',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 383,
                'code' => '012',
                'name' => 'Ayutla de los Libres',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 384,
                'code' => '013',
                'name' => 'Azoyú',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 385,
                'code' => '014',
                'name' => 'Benito Juárez',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 386,
                'code' => '015',
                'name' => 'Buenavista de Cuéllar',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 387,
                'code' => '016',
                'name' => 'Coahuayutla de José María Izazaga',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 388,
                'code' => '017',
                'name' => 'Cocula',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 389,
                'code' => '018',
                'name' => 'Copala',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 390,
                'code' => '019',
                'name' => 'Copalillo',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 391,
                'code' => '020',
                'name' => 'Copanatoyac',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 392,
                'code' => '021',
                'name' => 'Coyuca de Benítez',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 393,
                'code' => '022',
                'name' => 'Coyuca de Catalán',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 394,
                'code' => '023',
                'name' => 'Cuajinicuilapa',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 395,
                'code' => '024',
                'name' => 'Cualác',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 396,
                'code' => '025',
                'name' => 'Cuautepec',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 397,
                'code' => '026',
                'name' => 'Cuetzala del Progreso',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 398,
                'code' => '027',
                'name' => 'Cutzamala de Pinzón',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 399,
                'code' => '028',
                'name' => 'Chilapa de Álvarez',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 400,
                'code' => '029',
                'name' => 'Chilpancingo de los Bravo',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 401,
                'code' => '030',
                'name' => 'Florencio Villarreal',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 402,
                'code' => '031',
                'name' => 'General Canuto A. Neri',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 403,
                'code' => '032',
                'name' => 'General Heliodoro Castillo',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 404,
                'code' => '033',
                'name' => 'Huamuxtitlán',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 405,
                'code' => '034',
                'name' => 'Huitzuco de los Figueroa',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 406,
                'code' => '035',
                'name' => 'Iguala de la Independencia',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 407,
                'code' => '036',
                'name' => 'Igualapa',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 408,
                'code' => '037',
                'name' => 'Ixcateopan de Cuauhtémoc',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 409,
                'code' => '038',
                'name' => 'Zihuatanejo de Azueta',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 410,
                'code' => '039',
                'name' => 'Juan R. Escudero',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 411,
                'code' => '040',
                'name' => 'Leonardo Bravo',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 412,
                'code' => '041',
                'name' => 'Malinaltepec',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 413,
                'code' => '042',
                'name' => 'Mártir de Cuilapan',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 414,
                'code' => '043',
                'name' => 'Metlatónoc',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 415,
                'code' => '044',
                'name' => 'Mochitlán',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 416,
                'code' => '045',
                'name' => 'Olinalá',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 417,
                'code' => '046',
                'name' => 'Ometepec',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 418,
                'code' => '047',
                'name' => 'Pedro Ascencio Alquisiras',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 419,
                'code' => '048',
                'name' => 'Petatlán',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 420,
                'code' => '049',
                'name' => 'Pilcaya',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 421,
                'code' => '050',
                'name' => 'Pungarabato',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 422,
                'code' => '051',
                'name' => 'Quechultenango',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 423,
                'code' => '052',
                'name' => 'San Luis Acatlán',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 424,
                'code' => '053',
                'name' => 'San Marcos',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 425,
                'code' => '054',
                'name' => 'San Miguel Totolapan',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 426,
                'code' => '055',
                'name' => 'Taxco de Alarcón',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 427,
                'code' => '056',
                'name' => 'Tecoanapa',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 428,
                'code' => '057',
                'name' => 'Técpan de Galeana',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 429,
                'code' => '058',
                'name' => 'Teloloapan',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 430,
                'code' => '059',
                'name' => 'Tepecoacuilco de Trujano',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 431,
                'code' => '060',
                'name' => 'Tetipac',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 432,
                'code' => '061',
                'name' => 'Tixtla de Guerrero',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 433,
                'code' => '062',
                'name' => 'Tlacoachistlahuaca',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 434,
                'code' => '063',
                'name' => 'Tlacoapa',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 435,
                'code' => '064',
                'name' => 'Tlalchapa',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 436,
                'code' => '065',
                'name' => 'Tlalixtaquilla de Maldonado',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 437,
                'code' => '066',
                'name' => 'Tlapa de Comonfort',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 438,
                'code' => '067',
                'name' => 'Tlapehuala',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 439,
                'code' => '068',
                'name' => 'La Unión de Isidoro Montes de Oca',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 440,
                'code' => '069',
                'name' => 'Xalpatláhuac',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 441,
                'code' => '070',
                'name' => 'Xochihuehuetlán',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 442,
                'code' => '071',
                'name' => 'Xochistlahuaca',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 443,
                'code' => '072',
                'name' => 'Zapotitlán Tablas',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 444,
                'code' => '073',
                'name' => 'Zirándaro',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 445,
                'code' => '074',
                'name' => 'Zitlala',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 446,
                'code' => '075',
                'name' => 'Eduardo Neri',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 447,
                'code' => '076',
                'name' => 'Acatepec',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 448,
                'code' => '077',
                'name' => 'Marquelia',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 449,
                'code' => '078',
                'name' => 'Cochoapa el Grande',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 450,
                'code' => '079',
                'name' => 'José Joaquín de Herrera',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 451,
                'code' => '080',
                'name' => 'Juchitán',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 452,
                'code' => '081',
                'name' => 'Iliatenco',
                'state_id' => 12,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 453,
                'code' => '001',
                'name' => 'Acatlán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 454,
                'code' => '002',
                'name' => 'Acaxochitlán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 455,
                'code' => '003',
                'name' => 'Actopan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 456,
                'code' => '004',
                'name' => 'Agua Blanca de Iturbide',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 457,
                'code' => '005',
                'name' => 'Ajacuba',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 458,
                'code' => '006',
                'name' => 'Alfajayucan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 459,
                'code' => '007',
                'name' => 'Almoloya',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 460,
                'code' => '008',
                'name' => 'Apan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 461,
                'code' => '009',
                'name' => 'El Arenal',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 462,
                'code' => '010',
                'name' => 'Atitalaquia',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 463,
                'code' => '011',
                'name' => 'Atlapexco',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 464,
                'code' => '012',
                'name' => 'Atotonilco el Grande',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 465,
                'code' => '013',
                'name' => 'Atotonilco de Tula',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 466,
                'code' => '014',
                'name' => 'Calnali',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 467,
                'code' => '015',
                'name' => 'Cardonal',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 468,
                'code' => '016',
                'name' => 'Cuautepec de Hinojosa',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 469,
                'code' => '017',
                'name' => 'Chapantongo',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 470,
                'code' => '018',
                'name' => 'Chapulhuacán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 471,
                'code' => '019',
                'name' => 'Chilcuautla',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 472,
                'code' => '020',
                'name' => 'Eloxochitlán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 473,
                'code' => '021',
                'name' => 'Emiliano Zapata',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 474,
                'code' => '022',
                'name' => 'Epazoyucan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 475,
                'code' => '023',
                'name' => 'Francisco I. Madero',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 476,
                'code' => '024',
                'name' => 'Huasca de Ocampo',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 477,
                'code' => '025',
                'name' => 'Huautla',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 478,
                'code' => '026',
                'name' => 'Huazalingo',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 479,
                'code' => '027',
                'name' => 'Huehuetla',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 480,
                'code' => '028',
                'name' => 'Huejutla de Reyes',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 481,
                'code' => '029',
                'name' => 'Huichapan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 482,
                'code' => '030',
                'name' => 'Ixmiquilpan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 483,
                'code' => '031',
                'name' => 'Jacala de Ledezma',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 484,
                'code' => '032',
                'name' => 'Jaltocán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 485,
                'code' => '033',
                'name' => 'Juárez Hidalgo',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 486,
                'code' => '034',
                'name' => 'Lolotla',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 487,
                'code' => '035',
                'name' => 'Metepec',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 488,
                'code' => '036',
                'name' => 'San Agustín Metzquititlán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 489,
                'code' => '037',
                'name' => 'Metztitlán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 490,
                'code' => '038',
                'name' => 'Mineral del Chico',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 491,
                'code' => '039',
                'name' => 'Mineral del Monte',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 492,
                'code' => '040',
                'name' => 'La Misión',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 493,
                'code' => '041',
                'name' => 'Mixquiahuala de Juárez',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 494,
                'code' => '042',
                'name' => 'Molango de Escamilla',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 495,
                'code' => '043',
                'name' => 'Nicolás Flores',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 496,
                'code' => '044',
                'name' => 'Nopala de Villagrán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 497,
                'code' => '045',
                'name' => 'Omitlán de Juárez',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 498,
                'code' => '046',
                'name' => 'San Felipe Orizatlán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 499,
                'code' => '047',
                'name' => 'Pacula',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 500,
                'code' => '048',
                'name' => 'Pachuca de Soto',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('address_cities')->insert(array (
            0 => 
            array (
                'id' => 501,
                'code' => '049',
                'name' => 'Pisaflores',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 502,
                'code' => '050',
                'name' => 'Progreso de Obregón',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 503,
                'code' => '051',
                'name' => 'Mineral de la Reforma',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 504,
                'code' => '052',
                'name' => 'San Agustín Tlaxiaca',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 505,
                'code' => '053',
                'name' => 'San Bartolo Tutotepec',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 506,
                'code' => '054',
                'name' => 'San Salvador',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 507,
                'code' => '055',
                'name' => 'Santiago de Anaya',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 508,
                'code' => '056',
                'name' => 'Santiago Tulantepec de Lugo Guerrero',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 509,
                'code' => '057',
                'name' => 'Singuilucan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 510,
                'code' => '058',
                'name' => 'Tasquillo',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 511,
                'code' => '059',
                'name' => 'Tecozautla',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 512,
                'code' => '060',
                'name' => 'Tenango de Doria',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 513,
                'code' => '061',
                'name' => 'Tepeapulco',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 514,
                'code' => '062',
                'name' => 'Tepehuacán de Guerrero',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 515,
                'code' => '063',
                'name' => 'Tepeji del Río de Ocampo',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 516,
                'code' => '064',
                'name' => 'Tepetitlán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 517,
                'code' => '065',
                'name' => 'Tetepango',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 518,
                'code' => '066',
                'name' => 'Villa de Tezontepec',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 519,
                'code' => '067',
                'name' => 'Tezontepec de Aldama',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 520,
                'code' => '068',
                'name' => 'Tianguistengo',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 521,
                'code' => '069',
                'name' => 'Tizayuca',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 522,
                'code' => '070',
                'name' => 'Tlahuelilpan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 523,
                'code' => '071',
                'name' => 'Tlahuiltepa',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 524,
                'code' => '072',
                'name' => 'Tlanalapa',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 525,
                'code' => '073',
                'name' => 'Tlanchinol',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 526,
                'code' => '074',
                'name' => 'Tlaxcoapan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 527,
                'code' => '075',
                'name' => 'Tolcayuca',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 528,
                'code' => '076',
                'name' => 'Tula de Allende',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 529,
                'code' => '077',
                'name' => 'Tulancingo de Bravo',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 530,
                'code' => '078',
                'name' => 'Xochiatipan',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 531,
                'code' => '079',
                'name' => 'Xochicoatlán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 532,
                'code' => '080',
                'name' => 'Yahualica',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 533,
                'code' => '081',
                'name' => 'Zacualtipán de Ángeles',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 534,
                'code' => '082',
                'name' => 'Zapotlán de Juárez',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 535,
                'code' => '083',
                'name' => 'Zempoala',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 536,
                'code' => '084',
                'name' => 'Zimapán',
                'state_id' => 13,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 537,
                'code' => '001',
                'name' => 'Acatic',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 538,
                'code' => '002',
                'name' => 'Acatlán de Juárez',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 539,
                'code' => '003',
                'name' => 'Ahualulco de Mercado',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 540,
                'code' => '004',
                'name' => 'Amacueca',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 541,
                'code' => '005',
                'name' => 'Amatitán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 542,
                'code' => '006',
                'name' => 'Ameca',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 543,
                'code' => '007',
                'name' => 'San Juanito de Escobedo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 544,
                'code' => '008',
                'name' => 'Arandas',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 545,
                'code' => '009',
                'name' => 'El Arenal',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 546,
                'code' => '010',
                'name' => 'Atemajac de Brizuela',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 547,
                'code' => '011',
                'name' => 'Atengo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 548,
                'code' => '012',
                'name' => 'Atenguillo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 549,
                'code' => '013',
                'name' => 'Atotonilco el Alto',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 550,
                'code' => '014',
                'name' => 'Atoyac',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 551,
                'code' => '015',
                'name' => 'Autlán de Navarro',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 552,
                'code' => '016',
                'name' => 'Ayotlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 553,
                'code' => '017',
                'name' => 'Ayutla',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 554,
                'code' => '018',
                'name' => 'La Barca',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 555,
                'code' => '019',
                'name' => 'Bolaños',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 556,
                'code' => '020',
                'name' => 'Cabo Corrientes',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 557,
                'code' => '021',
                'name' => 'Casimiro Castillo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 558,
                'code' => '022',
                'name' => 'Cihuatlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 559,
                'code' => '023',
                'name' => 'Zapotlán el Grande',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 560,
                'code' => '024',
                'name' => 'Cocula',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 561,
                'code' => '025',
                'name' => 'Colotlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 562,
                'code' => '026',
                'name' => 'Concepción de Buenos Aires',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 563,
                'code' => '027',
                'name' => 'Cuautitlán de García Barragán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 564,
                'code' => '028',
                'name' => 'Cuautla',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 565,
                'code' => '029',
                'name' => 'Cuquío',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 566,
                'code' => '030',
                'name' => 'Chapala',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 567,
                'code' => '031',
                'name' => 'Chimaltitán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 568,
                'code' => '032',
                'name' => 'Chiquilistlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 569,
                'code' => '033',
                'name' => 'Degollado',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 570,
                'code' => '034',
                'name' => 'Ejutla',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 571,
                'code' => '035',
                'name' => 'Encarnación de Díaz',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 572,
                'code' => '036',
                'name' => 'Etzatlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 573,
                'code' => '037',
                'name' => 'El Grullo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 574,
                'code' => '038',
                'name' => 'Guachinango',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 575,
                'code' => '039',
                'name' => 'Guadalajara',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 576,
                'code' => '040',
                'name' => 'Hostotipaquillo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 577,
                'code' => '041',
                'name' => 'Huejúcar',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 578,
                'code' => '042',
                'name' => 'Huejuquilla el Alto',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 579,
                'code' => '043',
                'name' => 'La Huerta',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 580,
                'code' => '044',
                'name' => 'Ixtlahuacán de los Membrillos',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 581,
                'code' => '045',
                'name' => 'Ixtlahuacán del Río',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 582,
                'code' => '046',
                'name' => 'Jalostotitlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 583,
                'code' => '047',
                'name' => 'Jamay',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 584,
                'code' => '048',
                'name' => 'Jesús María',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 585,
                'code' => '049',
                'name' => 'Jilotlán de los Dolores',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 586,
                'code' => '050',
                'name' => 'Jocotepec',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 587,
                'code' => '051',
                'name' => 'Juanacatlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 588,
                'code' => '052',
                'name' => 'Juchitlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 589,
                'code' => '053',
                'name' => 'Lagos de Moreno',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 590,
                'code' => '054',
                'name' => 'El Limón',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 591,
                'code' => '055',
                'name' => 'Magdalena',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 592,
                'code' => '056',
                'name' => 'Santa María del Oro',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 593,
                'code' => '057',
                'name' => 'La Manzanilla de la Paz',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 594,
                'code' => '058',
                'name' => 'Mascota',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 595,
                'code' => '059',
                'name' => 'Mazamitla',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 596,
                'code' => '060',
                'name' => 'Mexticacán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 597,
                'code' => '061',
                'name' => 'Mezquitic',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 598,
                'code' => '062',
                'name' => 'Mixtlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 599,
                'code' => '063',
                'name' => 'Ocotlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 600,
                'code' => '064',
                'name' => 'Ojuelos de Jalisco',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 601,
                'code' => '065',
                'name' => 'Pihuamo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 602,
                'code' => '066',
                'name' => 'Poncitlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 603,
                'code' => '067',
                'name' => 'Puerto Vallarta',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 604,
                'code' => '068',
                'name' => 'Villa Purificación',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 605,
                'code' => '069',
                'name' => 'Quitupan',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 606,
                'code' => '070',
                'name' => 'El Salto',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 607,
                'code' => '071',
                'name' => 'San Cristóbal de la Barranca',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 608,
                'code' => '072',
                'name' => 'San Diego de Alejandría',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 609,
                'code' => '073',
                'name' => 'San Juan de los Lagos',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 610,
                'code' => '074',
                'name' => 'San Julián',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 611,
                'code' => '075',
                'name' => 'San Marcos',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 612,
                'code' => '076',
                'name' => 'San Martín de Bolaños',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 613,
                'code' => '077',
                'name' => 'San Martín Hidalgo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 614,
                'code' => '078',
                'name' => 'San Miguel el Alto',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 615,
                'code' => '079',
                'name' => 'Gómez Farías',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 616,
                'code' => '080',
                'name' => 'San Sebastián del Oeste',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 617,
                'code' => '081',
                'name' => 'Santa María de los Ángeles',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 618,
                'code' => '082',
                'name' => 'Sayula',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 619,
                'code' => '083',
                'name' => 'Tala',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 620,
                'code' => '084',
                'name' => 'Talpa de Allende',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 621,
                'code' => '085',
                'name' => 'Tamazula de Gordiano',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 622,
                'code' => '086',
                'name' => 'Tapalpa',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 623,
                'code' => '087',
                'name' => 'Tecalitlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 624,
                'code' => '088',
                'name' => 'Tecolotlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 625,
                'code' => '089',
                'name' => 'Techaluta de Montenegro',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 626,
                'code' => '090',
                'name' => 'Tenamaxtlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 627,
                'code' => '091',
                'name' => 'Teocaltiche',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 628,
                'code' => '092',
                'name' => 'Teocuitatlán de Corona',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 629,
                'code' => '093',
                'name' => 'Tepatitlán de Morelos',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 630,
                'code' => '094',
                'name' => 'Tequila',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 631,
                'code' => '095',
                'name' => 'Teuchitlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 632,
                'code' => '096',
                'name' => 'Tizapán el Alto',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 633,
                'code' => '097',
                'name' => 'Tlajomulco de Zúñiga',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 634,
                'code' => '098',
                'name' => 'San Pedro Tlaquepaque',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 635,
                'code' => '099',
                'name' => 'Tolimán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 636,
                'code' => '100',
                'name' => 'Tomatlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 637,
                'code' => '101',
                'name' => 'Tonalá',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 638,
                'code' => '102',
                'name' => 'Tonaya',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 639,
                'code' => '103',
                'name' => 'Tonila',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 640,
                'code' => '104',
                'name' => 'Totatiche',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 641,
                'code' => '105',
                'name' => 'Tototlán',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 642,
                'code' => '106',
                'name' => 'Tuxcacuesco',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 643,
                'code' => '107',
                'name' => 'Tuxcueca',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 644,
                'code' => '108',
                'name' => 'Tuxpan',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 645,
                'code' => '109',
                'name' => 'Unión de San Antonio',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 646,
                'code' => '110',
                'name' => 'Unión de Tula',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 647,
                'code' => '111',
                'name' => 'Valle de Guadalupe',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 648,
                'code' => '112',
                'name' => 'Valle de Juárez',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 649,
                'code' => '113',
                'name' => 'San Gabriel',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 650,
                'code' => '114',
                'name' => 'Villa Corona',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 651,
                'code' => '115',
                'name' => 'Villa Guerrero',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 652,
                'code' => '116',
                'name' => 'Villa Hidalgo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 653,
                'code' => '117',
                'name' => 'Cañadas de Obregón',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 654,
                'code' => '118',
                'name' => 'Yahualica de González Gallo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 655,
                'code' => '119',
                'name' => 'Zacoalco de Torres',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 656,
                'code' => '120',
                'name' => 'Zapopan',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 657,
                'code' => '121',
                'name' => 'Zapotiltic',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 658,
                'code' => '122',
                'name' => 'Zapotitlán de Vadillo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 659,
                'code' => '123',
                'name' => 'Zapotlán del Rey',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 660,
                'code' => '124',
                'name' => 'Zapotlanejo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 661,
                'code' => '125',
                'name' => 'San Ignacio Cerro Gordo',
                'state_id' => 14,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 662,
                'code' => '001',
                'name' => 'Acambay de Ruíz Castañeda',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 663,
                'code' => '002',
                'name' => 'Acolman',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 664,
                'code' => '003',
                'name' => 'Aculco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 665,
                'code' => '004',
                'name' => 'Almoloya de Alquisiras',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 666,
                'code' => '005',
                'name' => 'Almoloya de Juárez',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 667,
                'code' => '006',
                'name' => 'Almoloya del Río',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 668,
                'code' => '007',
                'name' => 'Amanalco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 669,
                'code' => '008',
                'name' => 'Amatepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 670,
                'code' => '009',
                'name' => 'Amecameca',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 671,
                'code' => '010',
                'name' => 'Apaxco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 672,
                'code' => '011',
                'name' => 'Atenco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 673,
                'code' => '012',
                'name' => 'Atizapán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 674,
                'code' => '013',
                'name' => 'Atizapán de Zaragoza',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 675,
                'code' => '014',
                'name' => 'Atlacomulco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 676,
                'code' => '015',
                'name' => 'Atlautla',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 677,
                'code' => '016',
                'name' => 'Axapusco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 678,
                'code' => '017',
                'name' => 'Ayapango',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 679,
                'code' => '018',
                'name' => 'Calimaya',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 680,
                'code' => '019',
                'name' => 'Capulhuac',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 681,
                'code' => '020',
                'name' => 'Coacalco de Berriozábal',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 682,
                'code' => '021',
                'name' => 'Coatepec Harinas',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 683,
                'code' => '022',
                'name' => 'Cocotitlán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 684,
                'code' => '023',
                'name' => 'Coyotepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 685,
                'code' => '024',
                'name' => 'Cuautitlán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 686,
                'code' => '025',
                'name' => 'Chalco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 687,
                'code' => '026',
                'name' => 'Chapa de Mota',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 688,
                'code' => '027',
                'name' => 'Chapultepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 689,
                'code' => '028',
                'name' => 'Chiautla',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 690,
                'code' => '029',
                'name' => 'Chicoloapan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 691,
                'code' => '030',
                'name' => 'Chiconcuac',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 692,
                'code' => '031',
                'name' => 'Chimalhuacán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 693,
                'code' => '032',
                'name' => 'Donato Guerra',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 694,
                'code' => '033',
                'name' => 'Ecatepec de Morelos',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 695,
                'code' => '034',
                'name' => 'Ecatzingo',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 696,
                'code' => '035',
                'name' => 'Huehuetoca',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 697,
                'code' => '036',
                'name' => 'Hueypoxtla',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 698,
                'code' => '037',
                'name' => 'Huixquilucan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 699,
                'code' => '038',
                'name' => 'Isidro Fabela',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 700,
                'code' => '039',
                'name' => 'Ixtapaluca',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 701,
                'code' => '040',
                'name' => 'Ixtapan de la Sal',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 702,
                'code' => '041',
                'name' => 'Ixtapan del Oro',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 703,
                'code' => '042',
                'name' => 'Ixtlahuaca',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 704,
                'code' => '043',
                'name' => 'Xalatlaco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 705,
                'code' => '044',
                'name' => 'Jaltenco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 706,
                'code' => '045',
                'name' => 'Jilotepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 707,
                'code' => '046',
                'name' => 'Jilotzingo',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 708,
                'code' => '047',
                'name' => 'Jiquipilco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 709,
                'code' => '048',
                'name' => 'Jocotitlán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 710,
                'code' => '049',
                'name' => 'Joquicingo',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 711,
                'code' => '050',
                'name' => 'Juchitepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 712,
                'code' => '051',
                'name' => 'Lerma',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 713,
                'code' => '052',
                'name' => 'Malinalco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 714,
                'code' => '053',
                'name' => 'Melchor Ocampo',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 715,
                'code' => '054',
                'name' => 'Metepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 716,
                'code' => '055',
                'name' => 'Mexicaltzingo',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 717,
                'code' => '056',
                'name' => 'Morelos',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 718,
                'code' => '057',
                'name' => 'Naucalpan de Juárez',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 719,
                'code' => '058',
                'name' => 'Nezahualcóyotl',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 720,
                'code' => '059',
                'name' => 'Nextlalpan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 721,
                'code' => '060',
                'name' => 'Nicolás Romero',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 722,
                'code' => '061',
                'name' => 'Nopaltepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 723,
                'code' => '062',
                'name' => 'Ocoyoacac',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 724,
                'code' => '063',
                'name' => 'Ocuilan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 725,
                'code' => '064',
                'name' => 'El Oro',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 726,
                'code' => '065',
                'name' => 'Otumba',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 727,
                'code' => '066',
                'name' => 'Otzoloapan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 728,
                'code' => '067',
                'name' => 'Otzolotepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 729,
                'code' => '068',
                'name' => 'Ozumba',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 730,
                'code' => '069',
                'name' => 'Papalotla',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 731,
                'code' => '070',
                'name' => 'La Paz',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 732,
                'code' => '071',
                'name' => 'Polotitlán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 733,
                'code' => '072',
                'name' => 'Rayón',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 734,
                'code' => '073',
                'name' => 'San Antonio la Isla',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 735,
                'code' => '074',
                'name' => 'San Felipe del Progreso',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 736,
                'code' => '075',
                'name' => 'San Martín de las Pirámides',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 737,
                'code' => '076',
                'name' => 'San Mateo Atenco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 738,
                'code' => '077',
                'name' => 'San Simón de Guerrero',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 739,
                'code' => '078',
                'name' => 'Santo Tomás',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 740,
                'code' => '079',
                'name' => 'Soyaniquilpan de Juárez',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 741,
                'code' => '080',
                'name' => 'Sultepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 742,
                'code' => '081',
                'name' => 'Tecámac',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 743,
                'code' => '082',
                'name' => 'Tejupilco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 744,
                'code' => '083',
                'name' => 'Temamatla',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 745,
                'code' => '084',
                'name' => 'Temascalapa',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 746,
                'code' => '085',
                'name' => 'Temascalcingo',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 747,
                'code' => '086',
                'name' => 'Temascaltepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 748,
                'code' => '087',
                'name' => 'Temoaya',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 749,
                'code' => '088',
                'name' => 'Tenancingo',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 750,
                'code' => '089',
                'name' => 'Tenango del Aire',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 751,
                'code' => '090',
                'name' => 'Tenango del Valle',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 752,
                'code' => '091',
                'name' => 'Teoloyucan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 753,
                'code' => '092',
                'name' => 'Teotihuacán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 754,
                'code' => '093',
                'name' => 'Tepetlaoxtoc',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 755,
                'code' => '094',
                'name' => 'Tepetlixpa',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 756,
                'code' => '095',
                'name' => 'Tepotzotlán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 757,
                'code' => '096',
                'name' => 'Tequixquiac',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 758,
                'code' => '097',
                'name' => 'Texcaltitlán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 759,
                'code' => '098',
                'name' => 'Texcalyacac',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 760,
                'code' => '099',
                'name' => 'Texcoco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 761,
                'code' => '100',
                'name' => 'Tezoyuca',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 762,
                'code' => '101',
                'name' => 'Tianguistenco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 763,
                'code' => '102',
                'name' => 'Timilpan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 764,
                'code' => '103',
                'name' => 'Tlalmanalco',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 765,
                'code' => '104',
                'name' => 'Tlalnepantla de Baz',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 766,
                'code' => '105',
                'name' => 'Tlatlaya',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 767,
                'code' => '106',
                'name' => 'Toluca',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 768,
                'code' => '107',
                'name' => 'Tonatico',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 769,
                'code' => '108',
                'name' => 'Tultepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 770,
                'code' => '109',
                'name' => 'Tultitlán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 771,
                'code' => '110',
                'name' => 'Valle de Bravo',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 772,
                'code' => '111',
                'name' => 'Villa de Allende',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 773,
                'code' => '112',
                'name' => 'Villa del Carbón',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 774,
                'code' => '113',
                'name' => 'Villa Guerrero',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 775,
                'code' => '114',
                'name' => 'Villa Victoria',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 776,
                'code' => '115',
                'name' => 'Xonacatlán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 777,
                'code' => '116',
                'name' => 'Zacazonapan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 778,
                'code' => '117',
                'name' => 'Zacualpan',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 779,
                'code' => '118',
                'name' => 'Zinacantepec',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 780,
                'code' => '119',
                'name' => 'Zumpahuacán',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 781,
                'code' => '120',
                'name' => 'Zumpango',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 782,
                'code' => '121',
                'name' => 'Cuautitlán Izcalli',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 783,
                'code' => '122',
                'name' => 'Valle de Chalco Solidaridad',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 784,
                'code' => '123',
                'name' => 'Luvianos',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 785,
                'code' => '124',
                'name' => 'San José del Rincón',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 786,
                'code' => '125',
                'name' => 'Tonanitla',
                'state_id' => 15,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 787,
                'code' => '001',
                'name' => 'Acuitzio',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 788,
                'code' => '002',
                'name' => 'Aguililla',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 789,
                'code' => '003',
                'name' => 'Álvaro Obregón',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 790,
                'code' => '004',
                'name' => 'Angamacutiro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 791,
                'code' => '005',
                'name' => 'Angangueo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 792,
                'code' => '006',
                'name' => 'Apatzingán',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 793,
                'code' => '007',
                'name' => 'Aporo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 794,
                'code' => '008',
                'name' => 'Aquila',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 795,
                'code' => '009',
                'name' => 'Ario',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 796,
                'code' => '010',
                'name' => 'Arteaga',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 797,
                'code' => '011',
                'name' => 'Briseñas',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 798,
                'code' => '012',
                'name' => 'Buenavista',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 799,
                'code' => '013',
                'name' => 'Carácuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 800,
                'code' => '014',
                'name' => 'Coahuayana',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 801,
                'code' => '015',
                'name' => 'Coalcomán de Vázquez Pallares',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 802,
                'code' => '016',
                'name' => 'Coeneo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 803,
                'code' => '017',
                'name' => 'Contepec',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 804,
                'code' => '018',
                'name' => 'Copándaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 805,
                'code' => '019',
                'name' => 'Cotija',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 806,
                'code' => '020',
                'name' => 'Cuitzeo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 807,
                'code' => '021',
                'name' => 'Charapan',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 808,
                'code' => '022',
                'name' => 'Charo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 809,
                'code' => '023',
                'name' => 'Chavinda',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 810,
                'code' => '024',
                'name' => 'Cherán',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 811,
                'code' => '025',
                'name' => 'Chilchota',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 812,
                'code' => '026',
                'name' => 'Chinicuila',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 813,
                'code' => '027',
                'name' => 'Chucándiro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 814,
                'code' => '028',
                'name' => 'Churintzio',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 815,
                'code' => '029',
                'name' => 'Churumuco',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 816,
                'code' => '030',
                'name' => 'Ecuandureo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 817,
                'code' => '031',
                'name' => 'Epitacio Huerta',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 818,
                'code' => '032',
                'name' => 'Erongarícuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 819,
                'code' => '033',
                'name' => 'Gabriel Zamora',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 820,
                'code' => '034',
                'name' => 'Hidalgo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 821,
                'code' => '035',
                'name' => 'La Huacana',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 822,
                'code' => '036',
                'name' => 'Huandacareo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 823,
                'code' => '037',
                'name' => 'Huaniqueo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 824,
                'code' => '038',
                'name' => 'Huetamo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 825,
                'code' => '039',
                'name' => 'Huiramba',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 826,
                'code' => '040',
                'name' => 'Indaparapeo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 827,
                'code' => '041',
                'name' => 'Irimbo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 828,
                'code' => '042',
                'name' => 'Ixtlán',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 829,
                'code' => '043',
                'name' => 'Jacona',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 830,
                'code' => '044',
                'name' => 'Jiménez',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 831,
                'code' => '045',
                'name' => 'Jiquilpan',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 832,
                'code' => '046',
                'name' => 'Juárez',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 833,
                'code' => '047',
                'name' => 'Jungapeo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 834,
                'code' => '048',
                'name' => 'Lagunillas',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 835,
                'code' => '049',
                'name' => 'Madero',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 836,
                'code' => '050',
                'name' => 'Maravatío',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 837,
                'code' => '051',
                'name' => 'Marcos Castellanos',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 838,
                'code' => '052',
                'name' => 'Lázaro Cárdenas',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 839,
                'code' => '053',
                'name' => 'Morelia',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 840,
                'code' => '054',
                'name' => 'Morelos',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 841,
                'code' => '055',
                'name' => 'Múgica',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 842,
                'code' => '056',
                'name' => 'Nahuatzen',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 843,
                'code' => '057',
                'name' => 'Nocupétaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 844,
                'code' => '058',
                'name' => 'Nuevo Parangaricutiro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 845,
                'code' => '059',
                'name' => 'Nuevo Urecho',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 846,
                'code' => '060',
                'name' => 'Numarán',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 847,
                'code' => '061',
                'name' => 'Ocampo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 848,
                'code' => '062',
                'name' => 'Pajacuarán',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 849,
                'code' => '063',
                'name' => 'Panindícuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 850,
                'code' => '064',
                'name' => 'Parácuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 851,
                'code' => '065',
                'name' => 'Paracho',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 852,
                'code' => '066',
                'name' => 'Pátzcuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 853,
                'code' => '067',
                'name' => 'Penjamillo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 854,
                'code' => '068',
                'name' => 'Peribán',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 855,
                'code' => '069',
                'name' => 'La Piedad',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 856,
                'code' => '070',
                'name' => 'Purépero',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 857,
                'code' => '071',
                'name' => 'Puruándiro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 858,
                'code' => '072',
                'name' => 'Queréndaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 859,
                'code' => '073',
                'name' => 'Quiroga',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 860,
                'code' => '074',
                'name' => 'Cojumatlán de Régules',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 861,
                'code' => '075',
                'name' => 'Los Reyes',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 862,
                'code' => '076',
                'name' => 'Sahuayo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 863,
                'code' => '077',
                'name' => 'San Lucas',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 864,
                'code' => '078',
                'name' => 'Santa Ana Maya',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 865,
                'code' => '079',
                'name' => 'Salvador Escalante',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 866,
                'code' => '080',
                'name' => 'Senguio',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 867,
                'code' => '081',
                'name' => 'Susupuato',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 868,
                'code' => '082',
                'name' => 'Tacámbaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 869,
                'code' => '083',
                'name' => 'Tancítaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 870,
                'code' => '084',
                'name' => 'Tangamandapio',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 871,
                'code' => '085',
                'name' => 'Tangancícuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 872,
                'code' => '086',
                'name' => 'Tanhuato',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 873,
                'code' => '087',
                'name' => 'Taretan',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 874,
                'code' => '088',
                'name' => 'Tarímbaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 875,
                'code' => '089',
                'name' => 'Tepalcatepec',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 876,
                'code' => '090',
                'name' => 'Tingambato',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 877,
                'code' => '091',
                'name' => 'Tingüindín',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 878,
                'code' => '092',
                'name' => 'Tiquicheo de Nicolás Romero',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 879,
                'code' => '093',
                'name' => 'Tlalpujahua',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 880,
                'code' => '094',
                'name' => 'Tlazazalca',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 881,
                'code' => '095',
                'name' => 'Tocumbo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 882,
                'code' => '096',
                'name' => 'Tumbiscatío',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 883,
                'code' => '097',
                'name' => 'Turicato',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 884,
                'code' => '098',
                'name' => 'Tuxpan',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 885,
                'code' => '099',
                'name' => 'Tuzantla',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 886,
                'code' => '100',
                'name' => 'Tzintzuntzan',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 887,
                'code' => '101',
                'name' => 'Tzitzio',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 888,
                'code' => '102',
                'name' => 'Uruapan',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 889,
                'code' => '103',
                'name' => 'Venustiano Carranza',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 890,
                'code' => '104',
                'name' => 'Villamar',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 891,
                'code' => '105',
                'name' => 'Vista Hermosa',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 892,
                'code' => '106',
                'name' => 'Yurécuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 893,
                'code' => '107',
                'name' => 'Zacapu',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 894,
                'code' => '108',
                'name' => 'Zamora',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 895,
                'code' => '109',
                'name' => 'Zináparo',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 896,
                'code' => '110',
                'name' => 'Zinapécuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 897,
                'code' => '111',
                'name' => 'Ziracuaretiro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 898,
                'code' => '112',
                'name' => 'Zitácuaro',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 899,
                'code' => '113',
                'name' => 'José Sixto Verduzco',
                'state_id' => 16,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 900,
                'code' => '001',
                'name' => 'Amacuzac',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 901,
                'code' => '002',
                'name' => 'Atlatlahucan',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 902,
                'code' => '003',
                'name' => 'Axochiapan',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 903,
                'code' => '004',
                'name' => 'Ayala',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 904,
                'code' => '005',
                'name' => 'Coatlán del Río',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 905,
                'code' => '006',
                'name' => 'Cuautla',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 906,
                'code' => '007',
                'name' => 'Cuernavaca',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 907,
                'code' => '008',
                'name' => 'Emiliano Zapata',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 908,
                'code' => '009',
                'name' => 'Huitzilac',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 909,
                'code' => '010',
                'name' => 'Jantetelco',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 910,
                'code' => '011',
                'name' => 'Jiutepec',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 911,
                'code' => '012',
                'name' => 'Jojutla',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 912,
                'code' => '013',
                'name' => 'Jonacatepec de Leandro Valle',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 913,
                'code' => '014',
                'name' => 'Mazatepec',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 914,
                'code' => '015',
                'name' => 'Miacatlán',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 915,
                'code' => '016',
                'name' => 'Ocuituco',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 916,
                'code' => '017',
                'name' => 'Puente de Ixtla',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 917,
                'code' => '018',
                'name' => 'Temixco',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 918,
                'code' => '019',
                'name' => 'Tepalcingo',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 919,
                'code' => '020',
                'name' => 'Tepoztlán',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 920,
                'code' => '021',
                'name' => 'Tetecala',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 921,
                'code' => '022',
                'name' => 'Tetela del Volcán',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 922,
                'code' => '023',
                'name' => 'Tlalnepantla',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 923,
                'code' => '024',
                'name' => 'Tlaltizapán de Zapata',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 924,
                'code' => '025',
                'name' => 'Tlaquiltenango',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 925,
                'code' => '026',
                'name' => 'Tlayacapan',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 926,
                'code' => '027',
                'name' => 'Totolapan',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 927,
                'code' => '028',
                'name' => 'Xochitepec',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 928,
                'code' => '029',
                'name' => 'Yautepec',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 929,
                'code' => '030',
                'name' => 'Yecapixtla',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 930,
                'code' => '031',
                'name' => 'Zacatepec',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 931,
                'code' => '032',
                'name' => 'Zacualpan de Amilpas',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 932,
                'code' => '033',
                'name' => 'Temoac',
                'state_id' => 17,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 933,
                'code' => '001',
                'name' => 'Acaponeta',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 934,
                'code' => '002',
                'name' => 'Ahuacatlán',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 935,
                'code' => '003',
                'name' => 'Amatlán de Cañas',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 936,
                'code' => '004',
                'name' => 'Compostela',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 937,
                'code' => '005',
                'name' => 'Huajicori',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 938,
                'code' => '006',
                'name' => 'Ixtlán del Río',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 939,
                'code' => '007',
                'name' => 'Jala',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 940,
                'code' => '008',
                'name' => 'Xalisco',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 941,
                'code' => '009',
                'name' => 'Del Nayar',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 942,
                'code' => '010',
                'name' => 'Rosamorada',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 943,
                'code' => '011',
                'name' => 'Ruíz',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 944,
                'code' => '012',
                'name' => 'San Blas',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 945,
                'code' => '013',
                'name' => 'San Pedro Lagunillas',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 946,
                'code' => '014',
                'name' => 'Santa María del Oro',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 947,
                'code' => '015',
                'name' => 'Santiago Ixcuintla',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 948,
                'code' => '016',
                'name' => 'Tecuala',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 949,
                'code' => '017',
                'name' => 'Tepic',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 950,
                'code' => '018',
                'name' => 'Tuxpan',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 951,
                'code' => '019',
                'name' => 'La Yesca',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 952,
                'code' => '020',
                'name' => 'Bahía de Banderas',
                'state_id' => 18,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 953,
                'code' => '001',
                'name' => 'Abasolo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 954,
                'code' => '002',
                'name' => 'Agualeguas',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 955,
                'code' => '003',
                'name' => 'Los Aldamas',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 956,
                'code' => '004',
                'name' => 'Allende',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 957,
                'code' => '005',
                'name' => 'Anáhuac',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 958,
                'code' => '006',
                'name' => 'Apodaca',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 959,
                'code' => '007',
                'name' => 'Aramberri',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 960,
                'code' => '008',
                'name' => 'Bustamante',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 961,
                'code' => '009',
                'name' => 'Cadereyta Jiménez',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 962,
                'code' => '010',
                'name' => 'El Carmen',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 963,
                'code' => '011',
                'name' => 'Cerralvo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 964,
                'code' => '012',
                'name' => 'Ciénega de Flores',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 965,
                'code' => '013',
                'name' => 'China',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 966,
                'code' => '014',
                'name' => 'Doctor Arroyo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 967,
                'code' => '015',
                'name' => 'Doctor Coss',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 968,
                'code' => '016',
                'name' => 'Doctor González',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 969,
                'code' => '017',
                'name' => 'Galeana',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 970,
                'code' => '018',
                'name' => 'García',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 971,
                'code' => '019',
                'name' => 'San Pedro Garza García',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 972,
                'code' => '020',
                'name' => 'General Bravo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 973,
                'code' => '021',
                'name' => 'General Escobedo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 974,
                'code' => '022',
                'name' => 'General Terán',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 975,
                'code' => '023',
                'name' => 'General Treviño',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 976,
                'code' => '024',
                'name' => 'General Zaragoza',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 977,
                'code' => '025',
                'name' => 'General Zuazua',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 978,
                'code' => '026',
                'name' => 'Guadalupe',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 979,
                'code' => '027',
                'name' => 'Los Herreras',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 980,
                'code' => '028',
                'name' => 'Higueras',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 981,
                'code' => '029',
                'name' => 'Hualahuises',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 982,
                'code' => '030',
                'name' => 'Iturbide',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 983,
                'code' => '031',
                'name' => 'Juárez',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 984,
                'code' => '032',
                'name' => 'Lampazos de Naranjo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 985,
                'code' => '033',
                'name' => 'Linares',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 986,
                'code' => '034',
                'name' => 'Marín',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 987,
                'code' => '035',
                'name' => 'Melchor Ocampo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 988,
                'code' => '036',
                'name' => 'Mier y Noriega',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 989,
                'code' => '037',
                'name' => 'Mina',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 990,
                'code' => '038',
                'name' => 'Montemorelos',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 991,
                'code' => '039',
                'name' => 'Monterrey',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 992,
                'code' => '040',
                'name' => 'Parás',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 993,
                'code' => '041',
                'name' => 'Pesquería',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 994,
                'code' => '042',
                'name' => 'Los Ramones',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 995,
                'code' => '043',
                'name' => 'Rayones',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 996,
                'code' => '044',
                'name' => 'Sabinas Hidalgo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 997,
                'code' => '045',
                'name' => 'Salinas Victoria',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 998,
                'code' => '046',
                'name' => 'San Nicolás de los Garza',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 999,
                'code' => '047',
                'name' => 'Hidalgo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1000,
                'code' => '048',
                'name' => 'Santa Catarina',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('address_cities')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'code' => '049',
                'name' => 'Santiago',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1002,
                'code' => '050',
                'name' => 'Vallecillo',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1003,
                'code' => '051',
                'name' => 'Villaldama',
                'state_id' => 19,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1004,
                'code' => '001',
                'name' => 'Abejones',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1005,
                'code' => '002',
                'name' => 'Acatlán de Pérez Figueroa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1006,
                'code' => '003',
                'name' => 'Asunción Cacalotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1007,
                'code' => '004',
                'name' => 'Asunción Cuyotepeji',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1008,
                'code' => '005',
                'name' => 'Asunción Ixtaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1009,
                'code' => '006',
                'name' => 'Asunción Nochixtlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1010,
                'code' => '007',
                'name' => 'Asunción Ocotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1011,
                'code' => '008',
                'name' => 'Asunción Tlacolulita',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1012,
                'code' => '009',
                'name' => 'Ayotzintepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1013,
                'code' => '010',
                'name' => 'El Barrio de la Soledad',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1014,
                'code' => '011',
                'name' => 'Calihualá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1015,
                'code' => '012',
                'name' => 'Candelaria Loxicha',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1016,
                'code' => '013',
                'name' => 'Ciénega de Zimatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1017,
                'code' => '014',
                'name' => 'Ciudad Ixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1018,
                'code' => '015',
                'name' => 'Coatecas Altas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1019,
                'code' => '016',
                'name' => 'Coicoyán de las Flores',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1020,
                'code' => '017',
                'name' => 'La Compañía',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1021,
                'code' => '018',
                'name' => 'Concepción Buenavista',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1022,
                'code' => '019',
                'name' => 'Concepción Pápalo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1023,
                'code' => '020',
                'name' => 'Constancia del Rosario',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1024,
                'code' => '021',
                'name' => 'Cosolapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1025,
                'code' => '022',
                'name' => 'Cosoltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1026,
                'code' => '023',
                'name' => 'Cuilápam de Guerrero',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1027,
                'code' => '024',
                'name' => 'Cuyamecalco Villa de Zaragoza',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1028,
                'code' => '025',
                'name' => 'Chahuites',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1029,
                'code' => '026',
                'name' => 'Chalcatongo de Hidalgo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1030,
                'code' => '027',
                'name' => 'Chiquihuitlán de Benito Juárez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1031,
                'code' => '028',
                'name' => 'Heroica Ciudad de Ejutla de Crespo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1032,
                'code' => '029',
                'name' => 'Eloxochitlán de Flores Magón',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1033,
                'code' => '030',
                'name' => 'El Espinal',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1034,
                'code' => '031',
                'name' => 'Tamazulápam del Espíritu Santo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1035,
                'code' => '032',
                'name' => 'Fresnillo de Trujano',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1036,
                'code' => '033',
                'name' => 'Guadalupe Etla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1037,
                'code' => '034',
                'name' => 'Guadalupe de Ramírez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1038,
                'code' => '035',
                'name' => 'Guelatao de Juárez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1039,
                'code' => '036',
                'name' => 'Guevea de Humboldt',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1040,
                'code' => '037',
                'name' => 'Mesones Hidalgo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1041,
                'code' => '038',
                'name' => 'Villa Hidalgo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1042,
                'code' => '039',
                'name' => 'Heroica Ciudad de Huajuapan de León',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1043,
                'code' => '040',
                'name' => 'Huautepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1044,
                'code' => '041',
                'name' => 'Huautla de Jiménez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1045,
                'code' => '042',
                'name' => 'Ixtlán de Juárez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1046,
                'code' => '043',
                'name' => 'Heroica Ciudad de Juchitán de Zaragoza',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1047,
                'code' => '044',
                'name' => 'Loma Bonita',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1048,
                'code' => '045',
                'name' => 'Magdalena Apasco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1049,
                'code' => '046',
                'name' => 'Magdalena Jaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1050,
                'code' => '047',
                'name' => 'Santa Magdalena Jicotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1051,
                'code' => '048',
                'name' => 'Magdalena Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1052,
                'code' => '049',
                'name' => 'Magdalena Ocotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1053,
                'code' => '050',
                'name' => 'Magdalena Peñasco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1054,
                'code' => '051',
                'name' => 'Magdalena Teitipac',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1055,
                'code' => '052',
                'name' => 'Magdalena Tequisistlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1056,
                'code' => '053',
                'name' => 'Magdalena Tlacotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1057,
                'code' => '054',
                'name' => 'Magdalena Zahuatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1058,
                'code' => '055',
                'name' => 'Mariscala de Juárez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1059,
                'code' => '056',
                'name' => 'Mártires de Tacubaya',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1060,
                'code' => '057',
                'name' => 'Matías Romero Avendaño',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1061,
                'code' => '058',
                'name' => 'Mazatlán Villa de Flores',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1062,
                'code' => '059',
                'name' => 'Miahuatlán de Porfirio Díaz',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1063,
                'code' => '060',
                'name' => 'Mixistlán de la Reforma',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1064,
                'code' => '061',
                'name' => 'Monjas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1065,
                'code' => '062',
                'name' => 'Natividad',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1066,
                'code' => '063',
                'name' => 'Nazareno Etla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1067,
                'code' => '064',
                'name' => 'Nejapa de Madero',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1068,
                'code' => '065',
                'name' => 'Ixpantepec Nieves',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1069,
                'code' => '066',
                'name' => 'Santiago Niltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1070,
                'code' => '067',
                'name' => 'Oaxaca de Juárez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1071,
                'code' => '068',
                'name' => 'Ocotlán de Morelos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1072,
                'code' => '069',
                'name' => 'La Pe',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1073,
                'code' => '070',
                'name' => 'Pinotepa de Don Luis',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1074,
                'code' => '071',
                'name' => 'Pluma Hidalgo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1075,
                'code' => '072',
                'name' => 'San José del Progreso',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1076,
                'code' => '073',
                'name' => 'Putla Villa de Guerrero',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1077,
                'code' => '074',
                'name' => 'Santa Catarina Quioquitani',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1078,
                'code' => '075',
                'name' => 'Reforma de Pineda',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1079,
                'code' => '076',
                'name' => 'La Reforma',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1080,
                'code' => '077',
                'name' => 'Reyes Etla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1081,
                'code' => '078',
                'name' => 'Rojas de Cuauhtémoc',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1082,
                'code' => '079',
                'name' => 'Salina Cruz',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1083,
                'code' => '080',
                'name' => 'San Agustín Amatengo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1084,
                'code' => '081',
                'name' => 'San Agustín Atenango',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1085,
                'code' => '082',
                'name' => 'San Agustín Chayuco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1086,
                'code' => '083',
                'name' => 'San Agustín de las Juntas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1087,
                'code' => '084',
                'name' => 'San Agustín Etla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1088,
                'code' => '085',
                'name' => 'San Agustín Loxicha',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1089,
                'code' => '086',
                'name' => 'San Agustín Tlacotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1090,
                'code' => '087',
                'name' => 'San Agustín Yatareni',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1091,
                'code' => '088',
                'name' => 'San Andrés Cabecera Nueva',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1092,
                'code' => '089',
                'name' => 'San Andrés Dinicuiti',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1093,
                'code' => '090',
                'name' => 'San Andrés Huaxpaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1094,
                'code' => '091',
                'name' => 'San Andrés Huayápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1095,
                'code' => '092',
                'name' => 'San Andrés Ixtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1096,
                'code' => '093',
                'name' => 'San Andrés Lagunas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1097,
                'code' => '094',
                'name' => 'San Andrés Nuxiño',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1098,
                'code' => '095',
                'name' => 'San Andrés Paxtlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1099,
                'code' => '096',
                'name' => 'San Andrés Sinaxtla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1100,
                'code' => '097',
                'name' => 'San Andrés Solaga',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1101,
                'code' => '098',
                'name' => 'San Andrés Teotilálpam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1102,
                'code' => '099',
                'name' => 'San Andrés Tepetlapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1103,
                'code' => '100',
                'name' => 'San Andrés Yaá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1104,
                'code' => '101',
                'name' => 'San Andrés Zabache',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1105,
                'code' => '102',
                'name' => 'San Andrés Zautla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1106,
                'code' => '103',
                'name' => 'San Antonino Castillo Velasco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1107,
                'code' => '104',
                'name' => 'San Antonino el Alto',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1108,
                'code' => '105',
                'name' => 'San Antonino Monte Verde',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1109,
                'code' => '106',
                'name' => 'San Antonio Acutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1110,
                'code' => '107',
                'name' => 'San Antonio de la Cal',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1111,
                'code' => '108',
                'name' => 'San Antonio Huitepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1112,
                'code' => '109',
                'name' => 'San Antonio Nanahuatípam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1113,
                'code' => '110',
                'name' => 'San Antonio Sinicahua',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1114,
                'code' => '111',
                'name' => 'San Antonio Tepetlapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1115,
                'code' => '112',
                'name' => 'San Baltazar Chichicápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1116,
                'code' => '113',
                'name' => 'San Baltazar Loxicha',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1117,
                'code' => '114',
                'name' => 'San Baltazar Yatzachi el Bajo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1118,
                'code' => '115',
                'name' => 'San Bartolo Coyotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1119,
                'code' => '116',
                'name' => 'San Bartolomé Ayautla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1120,
                'code' => '117',
                'name' => 'San Bartolomé Loxicha',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1121,
                'code' => '118',
                'name' => 'San Bartolomé Quialana',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1122,
                'code' => '119',
                'name' => 'San Bartolomé Yucuañe',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1123,
                'code' => '120',
                'name' => 'San Bartolomé Zoogocho',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1124,
                'code' => '121',
                'name' => 'San Bartolo Soyaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1125,
                'code' => '122',
                'name' => 'San Bartolo Yautepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1126,
                'code' => '123',
                'name' => 'San Bernardo Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1127,
                'code' => '124',
                'name' => 'San Blas Atempa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1128,
                'code' => '125',
                'name' => 'San Carlos Yautepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1129,
                'code' => '126',
                'name' => 'San Cristóbal Amatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1130,
                'code' => '127',
                'name' => 'San Cristóbal Amoltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1131,
                'code' => '128',
                'name' => 'San Cristóbal Lachirioag',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1132,
                'code' => '129',
                'name' => 'San Cristóbal Suchixtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1133,
                'code' => '130',
                'name' => 'San Dionisio del Mar',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1134,
                'code' => '131',
                'name' => 'San Dionisio Ocotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1135,
                'code' => '132',
                'name' => 'San Dionisio Ocotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1136,
                'code' => '133',
                'name' => 'San Esteban Atatlahuca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1137,
                'code' => '134',
                'name' => 'San Felipe Jalapa de Díaz',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1138,
                'code' => '135',
                'name' => 'San Felipe Tejalápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1139,
                'code' => '136',
                'name' => 'San Felipe Usila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1140,
                'code' => '137',
                'name' => 'San Francisco Cahuacuá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1141,
                'code' => '138',
                'name' => 'San Francisco Cajonos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1142,
                'code' => '139',
                'name' => 'San Francisco Chapulapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1143,
                'code' => '140',
                'name' => 'San Francisco Chindúa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1144,
                'code' => '141',
                'name' => 'San Francisco del Mar',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1145,
                'code' => '142',
                'name' => 'San Francisco Huehuetlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1146,
                'code' => '143',
                'name' => 'San Francisco Ixhuatán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1147,
                'code' => '144',
                'name' => 'San Francisco Jaltepetongo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1148,
                'code' => '145',
                'name' => 'San Francisco Lachigoló',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1149,
                'code' => '146',
                'name' => 'San Francisco Logueche',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1150,
                'code' => '147',
                'name' => 'San Francisco Nuxaño',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1151,
                'code' => '148',
                'name' => 'San Francisco Ozolotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1152,
                'code' => '149',
                'name' => 'San Francisco Sola',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1153,
                'code' => '150',
                'name' => 'San Francisco Telixtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1154,
                'code' => '151',
                'name' => 'San Francisco Teopan',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1155,
                'code' => '152',
                'name' => 'San Francisco Tlapancingo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1156,
                'code' => '153',
                'name' => 'San Gabriel Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1157,
                'code' => '154',
                'name' => 'San Ildefonso Amatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1158,
                'code' => '155',
                'name' => 'San Ildefonso Sola',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1159,
                'code' => '156',
                'name' => 'San Ildefonso Villa Alta',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1160,
                'code' => '157',
                'name' => 'San Jacinto Amilpas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1161,
                'code' => '158',
                'name' => 'San Jacinto Tlacotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1162,
                'code' => '159',
                'name' => 'San Jerónimo Coatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1163,
                'code' => '160',
                'name' => 'San Jerónimo Silacayoapilla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1164,
                'code' => '161',
                'name' => 'San Jerónimo Sosola',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1165,
                'code' => '162',
                'name' => 'San Jerónimo Taviche',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1166,
                'code' => '163',
                'name' => 'San Jerónimo Tecóatl',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1167,
                'code' => '164',
                'name' => 'San Jorge Nuchita',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1168,
                'code' => '165',
                'name' => 'San José Ayuquila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1169,
                'code' => '166',
                'name' => 'San José Chiltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1170,
                'code' => '167',
                'name' => 'San José del Peñasco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1171,
                'code' => '168',
                'name' => 'San José Estancia Grande',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1172,
                'code' => '169',
                'name' => 'San José Independencia',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1173,
                'code' => '170',
                'name' => 'San José Lachiguiri',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1174,
                'code' => '171',
                'name' => 'San José Tenango',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1175,
                'code' => '172',
                'name' => 'San Juan Achiutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1176,
                'code' => '173',
                'name' => 'San Juan Atepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1177,
                'code' => '174',
                'name' => 'Ánimas Trujano',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1178,
                'code' => '175',
                'name' => 'San Juan Bautista Atatlahuca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1179,
                'code' => '176',
                'name' => 'San Juan Bautista Coixtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1180,
                'code' => '177',
                'name' => 'San Juan Bautista Cuicatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1181,
                'code' => '178',
                'name' => 'San Juan Bautista Guelache',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1182,
                'code' => '179',
                'name' => 'San Juan Bautista Jayacatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1183,
                'code' => '180',
                'name' => 'San Juan Bautista Lo de Soto',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1184,
                'code' => '181',
                'name' => 'San Juan Bautista Suchitepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1185,
                'code' => '182',
                'name' => 'San Juan Bautista Tlacoatzintepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1186,
                'code' => '183',
                'name' => 'San Juan Bautista Tlachichilco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1187,
                'code' => '184',
                'name' => 'San Juan Bautista Tuxtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1188,
                'code' => '185',
                'name' => 'San Juan Cacahuatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1189,
                'code' => '186',
                'name' => 'San Juan Cieneguilla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1190,
                'code' => '187',
                'name' => 'San Juan Coatzóspam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1191,
                'code' => '188',
                'name' => 'San Juan Colorado',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1192,
                'code' => '189',
                'name' => 'San Juan Comaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1193,
                'code' => '190',
                'name' => 'San Juan Cotzocón',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1194,
                'code' => '191',
                'name' => 'San Juan Chicomezúchil',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1195,
                'code' => '192',
                'name' => 'San Juan Chilateca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1196,
                'code' => '193',
                'name' => 'San Juan del Estado',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1197,
                'code' => '194',
                'name' => 'San Juan del Río',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1198,
                'code' => '195',
                'name' => 'San Juan Diuxi',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1199,
                'code' => '196',
                'name' => 'San Juan Evangelista Analco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1200,
                'code' => '197',
                'name' => 'San Juan Guelavía',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1201,
                'code' => '198',
                'name' => 'San Juan Guichicovi',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1202,
                'code' => '199',
                'name' => 'San Juan Ihualtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1203,
                'code' => '200',
                'name' => 'San Juan Juquila Mixes',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1204,
                'code' => '201',
                'name' => 'San Juan Juquila Vijanos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1205,
                'code' => '202',
                'name' => 'San Juan Lachao',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1206,
                'code' => '203',
                'name' => 'San Juan Lachigalla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1207,
                'code' => '204',
                'name' => 'San Juan Lajarcia',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1208,
                'code' => '205',
                'name' => 'San Juan Lalana',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1209,
                'code' => '206',
                'name' => 'San Juan de los Cués',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1210,
                'code' => '207',
                'name' => 'San Juan Mazatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1211,
                'code' => '208',
                'name' => 'San Juan Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1212,
                'code' => '209',
                'name' => 'San Juan Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1213,
                'code' => '210',
                'name' => 'San Juan Ñumí',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1214,
                'code' => '211',
                'name' => 'San Juan Ozolotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1215,
                'code' => '212',
                'name' => 'San Juan Petlapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1216,
                'code' => '213',
                'name' => 'San Juan Quiahije',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1217,
                'code' => '214',
                'name' => 'San Juan Quiotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1218,
                'code' => '215',
                'name' => 'San Juan Sayultepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1219,
                'code' => '216',
                'name' => 'San Juan Tabaá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1220,
                'code' => '217',
                'name' => 'San Juan Tamazola',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1221,
                'code' => '218',
                'name' => 'San Juan Teita',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1222,
                'code' => '219',
                'name' => 'San Juan Teitipac',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1223,
                'code' => '220',
                'name' => 'San Juan Tepeuxila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1224,
                'code' => '221',
                'name' => 'San Juan Teposcolula',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1225,
                'code' => '222',
                'name' => 'San Juan Yaeé',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1226,
                'code' => '223',
                'name' => 'San Juan Yatzona',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1227,
                'code' => '224',
                'name' => 'San Juan Yucuita',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1228,
                'code' => '225',
                'name' => 'San Lorenzo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1229,
                'code' => '226',
                'name' => 'San Lorenzo Albarradas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1230,
                'code' => '227',
                'name' => 'San Lorenzo Cacaotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1231,
                'code' => '228',
                'name' => 'San Lorenzo Cuaunecuiltitla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1232,
                'code' => '229',
                'name' => 'San Lorenzo Texmelúcan',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1233,
                'code' => '230',
                'name' => 'San Lorenzo Victoria',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1234,
                'code' => '231',
                'name' => 'San Lucas Camotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1235,
                'code' => '232',
                'name' => 'San Lucas Ojitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1236,
                'code' => '233',
                'name' => 'San Lucas Quiaviní',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1237,
                'code' => '234',
                'name' => 'San Lucas Zoquiápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1238,
                'code' => '235',
                'name' => 'San Luis Amatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1239,
                'code' => '236',
                'name' => 'San Marcial Ozolotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1240,
                'code' => '237',
                'name' => 'San Marcos Arteaga',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1241,
                'code' => '238',
                'name' => 'San Martín de los Cansecos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1242,
                'code' => '239',
                'name' => 'San Martín Huamelúlpam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1243,
                'code' => '240',
                'name' => 'San Martín Itunyoso',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1244,
                'code' => '241',
                'name' => 'San Martín Lachilá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1245,
                'code' => '242',
                'name' => 'San Martín Peras',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1246,
                'code' => '243',
                'name' => 'San Martín Tilcajete',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1247,
                'code' => '244',
                'name' => 'San Martín Toxpalan',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1248,
                'code' => '245',
                'name' => 'San Martín Zacatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1249,
                'code' => '246',
                'name' => 'San Mateo Cajonos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1250,
                'code' => '247',
                'name' => 'Capulálpam de Méndez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1251,
                'code' => '248',
                'name' => 'San Mateo del Mar',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1252,
                'code' => '249',
                'name' => 'San Mateo Yoloxochitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1253,
                'code' => '250',
                'name' => 'San Mateo Etlatongo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1254,
                'code' => '251',
                'name' => 'San Mateo Nejápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1255,
                'code' => '252',
                'name' => 'San Mateo Peñasco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1256,
                'code' => '253',
                'name' => 'San Mateo Piñas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1257,
                'code' => '254',
                'name' => 'San Mateo Río Hondo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1258,
                'code' => '255',
                'name' => 'San Mateo Sindihui',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1259,
                'code' => '256',
                'name' => 'San Mateo Tlapiltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1260,
                'code' => '257',
                'name' => 'San Melchor Betaza',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1261,
                'code' => '258',
                'name' => 'San Miguel Achiutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1262,
                'code' => '259',
                'name' => 'San Miguel Ahuehuetitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1263,
                'code' => '260',
                'name' => 'San Miguel Aloápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1264,
                'code' => '261',
                'name' => 'San Miguel Amatitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1265,
                'code' => '262',
                'name' => 'San Miguel Amatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1266,
                'code' => '263',
                'name' => 'San Miguel Coatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1267,
                'code' => '264',
                'name' => 'San Miguel Chicahua',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1268,
                'code' => '265',
                'name' => 'San Miguel Chimalapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1269,
                'code' => '266',
                'name' => 'San Miguel del Puerto',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1270,
                'code' => '267',
                'name' => 'San Miguel del Río',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1271,
                'code' => '268',
                'name' => 'San Miguel Ejutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1272,
                'code' => '269',
                'name' => 'San Miguel el Grande',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1273,
                'code' => '270',
                'name' => 'San Miguel Huautla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1274,
                'code' => '271',
                'name' => 'San Miguel Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1275,
                'code' => '272',
                'name' => 'San Miguel Panixtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1276,
                'code' => '273',
                'name' => 'San Miguel Peras',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1277,
                'code' => '274',
                'name' => 'San Miguel Piedras',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1278,
                'code' => '275',
                'name' => 'San Miguel Quetzaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1279,
                'code' => '276',
                'name' => 'San Miguel Santa Flor',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1280,
                'code' => '277',
                'name' => 'Villa Sola de Vega',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1281,
                'code' => '278',
                'name' => 'San Miguel Soyaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1282,
                'code' => '279',
                'name' => 'San Miguel Suchixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1283,
                'code' => '280',
                'name' => 'Villa Talea de Castro',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1284,
                'code' => '281',
                'name' => 'San Miguel Tecomatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1285,
                'code' => '282',
                'name' => 'San Miguel Tenango',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1286,
                'code' => '283',
                'name' => 'San Miguel Tequixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1287,
                'code' => '284',
                'name' => 'San Miguel Tilquiápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1288,
                'code' => '285',
                'name' => 'San Miguel Tlacamama',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1289,
                'code' => '286',
                'name' => 'San Miguel Tlacotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1290,
                'code' => '287',
                'name' => 'San Miguel Tulancingo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1291,
                'code' => '288',
                'name' => 'San Miguel Yotao',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1292,
                'code' => '289',
                'name' => 'San Nicolás',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1293,
                'code' => '290',
                'name' => 'San Nicolás Hidalgo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1294,
                'code' => '291',
                'name' => 'San Pablo Coatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1295,
                'code' => '292',
                'name' => 'San Pablo Cuatro Venados',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1296,
                'code' => '293',
                'name' => 'San Pablo Etla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1297,
                'code' => '294',
                'name' => 'San Pablo Huitzo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1298,
                'code' => '295',
                'name' => 'San Pablo Huixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1299,
                'code' => '296',
                'name' => 'San Pablo Macuiltianguis',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1300,
                'code' => '297',
                'name' => 'San Pablo Tijaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1301,
                'code' => '298',
                'name' => 'San Pablo Villa de Mitla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1302,
                'code' => '299',
                'name' => 'San Pablo Yaganiza',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1303,
                'code' => '300',
                'name' => 'San Pedro Amuzgos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1304,
                'code' => '301',
                'name' => 'San Pedro Apóstol',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1305,
                'code' => '302',
                'name' => 'San Pedro Atoyac',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1306,
                'code' => '303',
                'name' => 'San Pedro Cajonos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1307,
                'code' => '304',
                'name' => 'San Pedro Coxcaltepec Cántaros',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1308,
                'code' => '305',
                'name' => 'San Pedro Comitancillo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1309,
                'code' => '306',
                'name' => 'San Pedro el Alto',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1310,
                'code' => '307',
                'name' => 'San Pedro Huamelula',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1311,
                'code' => '308',
                'name' => 'San Pedro Huilotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1312,
                'code' => '309',
                'name' => 'San Pedro Ixcatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1313,
                'code' => '310',
                'name' => 'San Pedro Ixtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1314,
                'code' => '311',
                'name' => 'San Pedro Jaltepetongo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1315,
                'code' => '312',
                'name' => 'San Pedro Jicayán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1316,
                'code' => '313',
                'name' => 'San Pedro Jocotipac',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1317,
                'code' => '314',
                'name' => 'San Pedro Juchatengo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1318,
                'code' => '315',
                'name' => 'San Pedro Mártir',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1319,
                'code' => '316',
                'name' => 'San Pedro Mártir Quiechapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1320,
                'code' => '317',
                'name' => 'San Pedro Mártir Yucuxaco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1321,
                'code' => '318',
                'name' => 'San Pedro Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1322,
                'code' => '319',
                'name' => 'San Pedro Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1323,
                'code' => '320',
                'name' => 'San Pedro Molinos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1324,
                'code' => '321',
                'name' => 'San Pedro Nopala',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1325,
                'code' => '322',
                'name' => 'San Pedro Ocopetatillo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1326,
                'code' => '323',
                'name' => 'San Pedro Ocotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1327,
                'code' => '324',
                'name' => 'San Pedro Pochutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1328,
                'code' => '325',
                'name' => 'San Pedro Quiatoni',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1329,
                'code' => '326',
                'name' => 'San Pedro Sochiápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1330,
                'code' => '327',
                'name' => 'San Pedro Tapanatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1331,
                'code' => '328',
                'name' => 'San Pedro Taviche',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1332,
                'code' => '329',
                'name' => 'San Pedro Teozacoalco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1333,
                'code' => '330',
                'name' => 'San Pedro Teutila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1334,
                'code' => '331',
                'name' => 'San Pedro Tidaá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1335,
                'code' => '332',
                'name' => 'San Pedro Topiltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1336,
                'code' => '333',
                'name' => 'San Pedro Totolápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1337,
                'code' => '334',
                'name' => 'Villa de Tututepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1338,
                'code' => '335',
                'name' => 'San Pedro Yaneri',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1339,
                'code' => '336',
                'name' => 'San Pedro Yólox',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1340,
                'code' => '337',
                'name' => 'San Pedro y San Pablo Ayutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1341,
                'code' => '338',
                'name' => 'Villa de Etla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1342,
                'code' => '339',
                'name' => 'San Pedro y San Pablo Teposcolula',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1343,
                'code' => '340',
                'name' => 'San Pedro y San Pablo Tequixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1344,
                'code' => '341',
                'name' => 'San Pedro Yucunama',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1345,
                'code' => '342',
                'name' => 'San Raymundo Jalpan',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1346,
                'code' => '343',
                'name' => 'San Sebastián Abasolo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1347,
                'code' => '344',
                'name' => 'San Sebastián Coatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1348,
                'code' => '345',
                'name' => 'San Sebastián Ixcapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1349,
                'code' => '346',
                'name' => 'San Sebastián Nicananduta',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1350,
                'code' => '347',
                'name' => 'San Sebastián Río Hondo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1351,
                'code' => '348',
                'name' => 'San Sebastián Tecomaxtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1352,
                'code' => '349',
                'name' => 'San Sebastián Teitipac',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1353,
                'code' => '350',
                'name' => 'San Sebastián Tutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1354,
                'code' => '351',
                'name' => 'San Simón Almolongas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1355,
                'code' => '352',
                'name' => 'San Simón Zahuatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1356,
                'code' => '353',
                'name' => 'Santa Ana',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1357,
                'code' => '354',
                'name' => 'Santa Ana Ateixtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1358,
                'code' => '355',
                'name' => 'Santa Ana Cuauhtémoc',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1359,
                'code' => '356',
                'name' => 'Santa Ana del Valle',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1360,
                'code' => '357',
                'name' => 'Santa Ana Tavela',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1361,
                'code' => '358',
                'name' => 'Santa Ana Tlapacoyan',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1362,
                'code' => '359',
                'name' => 'Santa Ana Yareni',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1363,
                'code' => '360',
                'name' => 'Santa Ana Zegache',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1364,
                'code' => '361',
                'name' => 'Santa Catalina Quierí',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1365,
                'code' => '362',
                'name' => 'Santa Catarina Cuixtla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1366,
                'code' => '363',
                'name' => 'Santa Catarina Ixtepeji',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1367,
                'code' => '364',
                'name' => 'Santa Catarina Juquila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1368,
                'code' => '365',
                'name' => 'Santa Catarina Lachatao',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1369,
                'code' => '366',
                'name' => 'Santa Catarina Loxicha',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1370,
                'code' => '367',
                'name' => 'Santa Catarina Mechoacán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1371,
                'code' => '368',
                'name' => 'Santa Catarina Minas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1372,
                'code' => '369',
                'name' => 'Santa Catarina Quiané',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1373,
                'code' => '370',
                'name' => 'Santa Catarina Tayata',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1374,
                'code' => '371',
                'name' => 'Santa Catarina Ticuá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1375,
                'code' => '372',
                'name' => 'Santa Catarina Yosonotú',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1376,
                'code' => '373',
                'name' => 'Santa Catarina Zapoquila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1377,
                'code' => '374',
                'name' => 'Santa Cruz Acatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1378,
                'code' => '375',
                'name' => 'Santa Cruz Amilpas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1379,
                'code' => '376',
                'name' => 'Santa Cruz de Bravo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1380,
                'code' => '377',
                'name' => 'Santa Cruz Itundujia',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1381,
                'code' => '378',
                'name' => 'Santa Cruz Mixtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1382,
                'code' => '379',
                'name' => 'Santa Cruz Nundaco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1383,
                'code' => '380',
                'name' => 'Santa Cruz Papalutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1384,
                'code' => '381',
                'name' => 'Santa Cruz Tacache de Mina',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1385,
                'code' => '382',
                'name' => 'Santa Cruz Tacahua',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1386,
                'code' => '383',
                'name' => 'Santa Cruz Tayata',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1387,
                'code' => '384',
                'name' => 'Santa Cruz Xitla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1388,
                'code' => '385',
                'name' => 'Santa Cruz Xoxocotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1389,
                'code' => '386',
                'name' => 'Santa Cruz Zenzontepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1390,
                'code' => '387',
                'name' => 'Santa Gertrudis',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1391,
                'code' => '388',
                'name' => 'Santa Inés del Monte',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1392,
                'code' => '389',
                'name' => 'Santa Inés Yatzeche',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1393,
                'code' => '390',
                'name' => 'Santa Lucía del Camino',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1394,
                'code' => '391',
                'name' => 'Santa Lucía Miahuatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1395,
                'code' => '392',
                'name' => 'Santa Lucía Monteverde',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1396,
                'code' => '393',
                'name' => 'Santa Lucía Ocotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1397,
                'code' => '394',
                'name' => 'Santa María Alotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1398,
                'code' => '395',
                'name' => 'Santa María Apazco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1399,
                'code' => '396',
                'name' => 'Santa María la Asunción',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1400,
                'code' => '397',
                'name' => 'Heroica Ciudad de Tlaxiaco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1401,
                'code' => '398',
                'name' => 'Ayoquezco de Aldama',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1402,
                'code' => '399',
                'name' => 'Santa María Atzompa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1403,
                'code' => '400',
                'name' => 'Santa María Camotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1404,
                'code' => '401',
                'name' => 'Santa María Colotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1405,
                'code' => '402',
                'name' => 'Santa María Cortijo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1406,
                'code' => '403',
                'name' => 'Santa María Coyotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1407,
                'code' => '404',
                'name' => 'Santa María Chachoápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1408,
                'code' => '405',
                'name' => 'Villa de Chilapa de Díaz',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1409,
                'code' => '406',
                'name' => 'Santa María Chilchotla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1410,
                'code' => '407',
                'name' => 'Santa María Chimalapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1411,
                'code' => '408',
                'name' => 'Santa María del Rosario',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1412,
                'code' => '409',
                'name' => 'Santa María del Tule',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1413,
                'code' => '410',
                'name' => 'Santa María Ecatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1414,
                'code' => '411',
                'name' => 'Santa María Guelacé',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1415,
                'code' => '412',
                'name' => 'Santa María Guienagati',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1416,
                'code' => '413',
                'name' => 'Santa María Huatulco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1417,
                'code' => '414',
                'name' => 'Santa María Huazolotitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1418,
                'code' => '415',
                'name' => 'Santa María Ipalapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1419,
                'code' => '416',
                'name' => 'Santa María Ixcatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1420,
                'code' => '417',
                'name' => 'Santa María Jacatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1421,
                'code' => '418',
                'name' => 'Santa María Jalapa del Marqués',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1422,
                'code' => '419',
                'name' => 'Santa María Jaltianguis',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1423,
                'code' => '420',
                'name' => 'Santa María Lachixío',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1424,
                'code' => '421',
                'name' => 'Santa María Mixtequilla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1425,
                'code' => '422',
                'name' => 'Santa María Nativitas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1426,
                'code' => '423',
                'name' => 'Santa María Nduayaco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1427,
                'code' => '424',
                'name' => 'Santa María Ozolotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1428,
                'code' => '425',
                'name' => 'Santa María Pápalo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1429,
                'code' => '426',
                'name' => 'Santa María Peñoles',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1430,
                'code' => '427',
                'name' => 'Santa María Petapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1431,
                'code' => '428',
                'name' => 'Santa María Quiegolani',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1432,
                'code' => '429',
                'name' => 'Santa María Sola',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1433,
                'code' => '430',
                'name' => 'Santa María Tataltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1434,
                'code' => '431',
                'name' => 'Santa María Tecomavaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1435,
                'code' => '432',
                'name' => 'Santa María Temaxcalapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1436,
                'code' => '433',
                'name' => 'Santa María Temaxcaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1437,
                'code' => '434',
                'name' => 'Santa María Teopoxco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1438,
                'code' => '435',
                'name' => 'Santa María Tepantlali',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1439,
                'code' => '436',
                'name' => 'Santa María Texcatitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1440,
                'code' => '437',
                'name' => 'Santa María Tlahuitoltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1441,
                'code' => '438',
                'name' => 'Santa María Tlalixtac',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1442,
                'code' => '439',
                'name' => 'Santa María Tonameca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1443,
                'code' => '440',
                'name' => 'Santa María Totolapilla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1444,
                'code' => '441',
                'name' => 'Santa María Xadani',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1445,
                'code' => '442',
                'name' => 'Santa María Yalina',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1446,
                'code' => '443',
                'name' => 'Santa María Yavesía',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1447,
                'code' => '444',
                'name' => 'Santa María Yolotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1448,
                'code' => '445',
                'name' => 'Santa María Yosoyúa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1449,
                'code' => '446',
                'name' => 'Santa María Yucuhiti',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1450,
                'code' => '447',
                'name' => 'Santa María Zacatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1451,
                'code' => '448',
                'name' => 'Santa María Zaniza',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1452,
                'code' => '449',
                'name' => 'Santa María Zoquitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1453,
                'code' => '450',
                'name' => 'Santiago Amoltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1454,
                'code' => '451',
                'name' => 'Santiago Apoala',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1455,
                'code' => '452',
                'name' => 'Santiago Apóstol',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1456,
                'code' => '453',
                'name' => 'Santiago Astata',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1457,
                'code' => '454',
                'name' => 'Santiago Atitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1458,
                'code' => '455',
                'name' => 'Santiago Ayuquililla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1459,
                'code' => '456',
                'name' => 'Santiago Cacaloxtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1460,
                'code' => '457',
                'name' => 'Santiago Camotlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1461,
                'code' => '458',
                'name' => 'Santiago Comaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1462,
                'code' => '459',
                'name' => 'Santiago Chazumba',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1463,
                'code' => '460',
                'name' => 'Santiago Choápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1464,
                'code' => '461',
                'name' => 'Santiago del Río',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1465,
                'code' => '462',
                'name' => 'Santiago Huajolotitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1466,
                'code' => '463',
                'name' => 'Santiago Huauclilla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1467,
                'code' => '464',
                'name' => 'Santiago Ihuitlán Plumas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1468,
                'code' => '465',
                'name' => 'Santiago Ixcuintepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1469,
                'code' => '466',
                'name' => 'Santiago Ixtayutla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1470,
                'code' => '467',
                'name' => 'Santiago Jamiltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1471,
                'code' => '468',
                'name' => 'Santiago Jocotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1472,
                'code' => '469',
                'name' => 'Santiago Juxtlahuaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1473,
                'code' => '470',
                'name' => 'Santiago Lachiguiri',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1474,
                'code' => '471',
                'name' => 'Santiago Lalopa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1475,
                'code' => '472',
                'name' => 'Santiago Laollaga',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1476,
                'code' => '473',
                'name' => 'Santiago Laxopa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1477,
                'code' => '474',
                'name' => 'Santiago Llano Grande',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1478,
                'code' => '475',
                'name' => 'Santiago Matatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1479,
                'code' => '476',
                'name' => 'Santiago Miltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1480,
                'code' => '477',
                'name' => 'Santiago Minas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1481,
                'code' => '478',
                'name' => 'Santiago Nacaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1482,
                'code' => '479',
                'name' => 'Santiago Nejapilla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1483,
                'code' => '480',
                'name' => 'Santiago Nundiche',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1484,
                'code' => '481',
                'name' => 'Santiago Nuyoó',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1485,
                'code' => '482',
                'name' => 'Santiago Pinotepa Nacional',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1486,
                'code' => '483',
                'name' => 'Santiago Suchilquitongo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1487,
                'code' => '484',
                'name' => 'Santiago Tamazola',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1488,
                'code' => '485',
                'name' => 'Santiago Tapextla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1489,
                'code' => '486',
                'name' => 'Villa Tejúpam de la Unión',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1490,
                'code' => '487',
                'name' => 'Santiago Tenango',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1491,
                'code' => '488',
                'name' => 'Santiago Tepetlapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1492,
                'code' => '489',
                'name' => 'Santiago Tetepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1493,
                'code' => '490',
                'name' => 'Santiago Texcalcingo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1494,
                'code' => '491',
                'name' => 'Santiago Textitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1495,
                'code' => '492',
                'name' => 'Santiago Tilantongo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1496,
                'code' => '493',
                'name' => 'Santiago Tillo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1497,
                'code' => '494',
                'name' => 'Santiago Tlazoyaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1498,
                'code' => '495',
                'name' => 'Santiago Xanica',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1499,
                'code' => '496',
                'name' => 'Santiago Xiacuí',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 1500,
                'code' => '497',
                'name' => 'Santiago Yaitepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('address_cities')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'code' => '498',
                'name' => 'Santiago Yaveo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 1502,
                'code' => '499',
                'name' => 'Santiago Yolomécatl',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 1503,
                'code' => '500',
                'name' => 'Santiago Yosondúa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 1504,
                'code' => '501',
                'name' => 'Santiago Yucuyachi',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 1505,
                'code' => '502',
                'name' => 'Santiago Zacatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 1506,
                'code' => '503',
                'name' => 'Santiago Zoochila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 1507,
                'code' => '504',
                'name' => 'Nuevo Zoquiápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 1508,
                'code' => '505',
                'name' => 'Santo Domingo Ingenio',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 1509,
                'code' => '506',
                'name' => 'Santo Domingo Albarradas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 1510,
                'code' => '507',
                'name' => 'Santo Domingo Armenta',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 1511,
                'code' => '508',
                'name' => 'Santo Domingo Chihuitán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 1512,
                'code' => '509',
                'name' => 'Santo Domingo de Morelos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 1513,
                'code' => '510',
                'name' => 'Santo Domingo Ixcatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 1514,
                'code' => '511',
                'name' => 'Santo Domingo Nuxaá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 1515,
                'code' => '512',
                'name' => 'Santo Domingo Ozolotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 1516,
                'code' => '513',
                'name' => 'Santo Domingo Petapa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 1517,
                'code' => '514',
                'name' => 'Santo Domingo Roayaga',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 1518,
                'code' => '515',
                'name' => 'Santo Domingo Tehuantepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 1519,
                'code' => '516',
                'name' => 'Santo Domingo Teojomulco',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 1520,
                'code' => '517',
                'name' => 'Santo Domingo Tepuxtepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 1521,
                'code' => '518',
                'name' => 'Santo Domingo Tlatayápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 1522,
                'code' => '519',
                'name' => 'Santo Domingo Tomaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 1523,
                'code' => '520',
                'name' => 'Santo Domingo Tonalá',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 1524,
                'code' => '521',
                'name' => 'Santo Domingo Tonaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 1525,
                'code' => '522',
                'name' => 'Santo Domingo Xagacía',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 1526,
                'code' => '523',
                'name' => 'Santo Domingo Yanhuitlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 1527,
                'code' => '524',
                'name' => 'Santo Domingo Yodohino',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 1528,
                'code' => '525',
                'name' => 'Santo Domingo Zanatepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 1529,
                'code' => '526',
                'name' => 'Santos Reyes Nopala',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 1530,
                'code' => '527',
                'name' => 'Santos Reyes Pápalo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 1531,
                'code' => '528',
                'name' => 'Santos Reyes Tepejillo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 1532,
                'code' => '529',
                'name' => 'Santos Reyes Yucuná',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 1533,
                'code' => '530',
                'name' => 'Santo Tomás Jalieza',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 1534,
                'code' => '531',
                'name' => 'Santo Tomás Mazaltepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 1535,
                'code' => '532',
                'name' => 'Santo Tomás Ocotepec',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 1536,
                'code' => '533',
                'name' => 'Santo Tomás Tamazulapan',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 1537,
                'code' => '534',
                'name' => 'San Vicente Coatlán',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 1538,
                'code' => '535',
                'name' => 'San Vicente Lachixío',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 1539,
                'code' => '536',
                'name' => 'San Vicente Nuñú',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 1540,
                'code' => '537',
                'name' => 'Silacayoápam',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 1541,
                'code' => '538',
                'name' => 'Sitio de Xitlapehua',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 1542,
                'code' => '539',
                'name' => 'Soledad Etla',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 1543,
                'code' => '540',
                'name' => 'Villa de Tamazulápam del Progreso',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 1544,
                'code' => '541',
                'name' => 'Tanetze de Zaragoza',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 1545,
                'code' => '542',
                'name' => 'Taniche',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 1546,
                'code' => '543',
                'name' => 'Tataltepec de Valdés',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 1547,
                'code' => '544',
                'name' => 'Teococuilco de Marcos Pérez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 1548,
                'code' => '545',
                'name' => 'Teotitlán de Flores Magón',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 1549,
                'code' => '546',
                'name' => 'Teotitlán del Valle',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 1550,
                'code' => '547',
                'name' => 'Teotongo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 1551,
                'code' => '548',
                'name' => 'Tepelmeme Villa de Morelos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 1552,
                'code' => '549',
                'name' => 'Heroica Villa Tezoatlán de Segura y Luna, Cuna de la Independencia de Oaxaca',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 1553,
                'code' => '550',
                'name' => 'San Jerónimo Tlacochahuaya',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 1554,
                'code' => '551',
                'name' => 'Tlacolula de Matamoros',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 1555,
                'code' => '552',
                'name' => 'Tlacotepec Plumas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 1556,
                'code' => '553',
                'name' => 'Tlalixtac de Cabrera',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 1557,
                'code' => '554',
                'name' => 'Totontepec Villa de Morelos',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 1558,
                'code' => '555',
                'name' => 'Trinidad Zaachila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 1559,
                'code' => '556',
                'name' => 'La Trinidad Vista Hermosa',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 1560,
                'code' => '557',
                'name' => 'Unión Hidalgo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 1561,
                'code' => '558',
                'name' => 'Valerio Trujano',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 1562,
                'code' => '559',
                'name' => 'San Juan Bautista Valle Nacional',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 1563,
                'code' => '560',
                'name' => 'Villa Díaz Ordaz',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 1564,
                'code' => '561',
                'name' => 'Yaxe',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 1565,
                'code' => '562',
                'name' => 'Magdalena Yodocono de Porfirio Díaz',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 1566,
                'code' => '563',
                'name' => 'Yogana',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 1567,
                'code' => '564',
                'name' => 'Yutanduchi de Guerrero',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 1568,
                'code' => '565',
                'name' => 'Villa de Zaachila',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 1569,
                'code' => '566',
                'name' => 'San Mateo Yucutindoo',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 1570,
                'code' => '567',
                'name' => 'Zapotitlán Lagunas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 1571,
                'code' => '568',
                'name' => 'Zapotitlán Palmas',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 1572,
                'code' => '569',
                'name' => 'Santa Inés de Zaragoza',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 1573,
                'code' => '570',
                'name' => 'Zimatlán de Álvarez',
                'state_id' => 20,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 1574,
                'code' => '001',
                'name' => 'Acajete',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 1575,
                'code' => '002',
                'name' => 'Acateno',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 1576,
                'code' => '003',
                'name' => 'Acatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 1577,
                'code' => '004',
                'name' => 'Acatzingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 1578,
                'code' => '005',
                'name' => 'Acteopan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 1579,
                'code' => '006',
                'name' => 'Ahuacatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 1580,
                'code' => '007',
                'name' => 'Ahuatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 1581,
                'code' => '008',
                'name' => 'Ahuazotepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 1582,
                'code' => '009',
                'name' => 'Ahuehuetitla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 1583,
                'code' => '010',
                'name' => 'Ajalpan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 1584,
                'code' => '011',
                'name' => 'Albino Zertuche',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 1585,
                'code' => '012',
                'name' => 'Aljojuca',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 1586,
                'code' => '013',
                'name' => 'Altepexi',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 1587,
                'code' => '014',
                'name' => 'Amixtlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 1588,
                'code' => '015',
                'name' => 'Amozoc',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 1589,
                'code' => '016',
                'name' => 'Aquixtla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 1590,
                'code' => '017',
                'name' => 'Atempan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 1591,
                'code' => '018',
                'name' => 'Atexcal',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 1592,
                'code' => '019',
                'name' => 'Atlixco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 1593,
                'code' => '020',
                'name' => 'Atoyatempan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 1594,
                'code' => '021',
                'name' => 'Atzala',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 1595,
                'code' => '022',
                'name' => 'Atzitzihuacán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 1596,
                'code' => '023',
                'name' => 'Atzitzintla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 1597,
                'code' => '024',
                'name' => 'Axutla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 1598,
                'code' => '025',
                'name' => 'Ayotoxco de Guerrero',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 1599,
                'code' => '026',
                'name' => 'Calpan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 1600,
                'code' => '027',
                'name' => 'Caltepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 1601,
                'code' => '028',
                'name' => 'Camocuautla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 1602,
                'code' => '029',
                'name' => 'Caxhuacan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 1603,
                'code' => '030',
                'name' => 'Coatepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 1604,
                'code' => '031',
                'name' => 'Coatzingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 1605,
                'code' => '032',
                'name' => 'Cohetzala',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 1606,
                'code' => '033',
                'name' => 'Cohuecan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 1607,
                'code' => '034',
                'name' => 'Coronango',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 1608,
                'code' => '035',
                'name' => 'Coxcatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 1609,
                'code' => '036',
                'name' => 'Coyomeapan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 1610,
                'code' => '037',
                'name' => 'Coyotepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 1611,
                'code' => '038',
                'name' => 'Cuapiaxtla de Madero',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 1612,
                'code' => '039',
                'name' => 'Cuautempan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 1613,
                'code' => '040',
                'name' => 'Cuautinchán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 1614,
                'code' => '041',
                'name' => 'Cuautlancingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 1615,
                'code' => '042',
                'name' => 'Cuayuca de Andrade',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 1616,
                'code' => '043',
                'name' => 'Cuetzalan del Progreso',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 1617,
                'code' => '044',
                'name' => 'Cuyoaco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 1618,
                'code' => '045',
                'name' => 'Chalchicomula de Sesma',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 1619,
                'code' => '046',
                'name' => 'Chapulco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 1620,
                'code' => '047',
                'name' => 'Chiautla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 1621,
                'code' => '048',
                'name' => 'Chiautzingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 1622,
                'code' => '049',
                'name' => 'Chiconcuautla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 1623,
                'code' => '050',
                'name' => 'Chichiquila',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 1624,
                'code' => '051',
                'name' => 'Chietla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 1625,
                'code' => '052',
                'name' => 'Chigmecatitlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 1626,
                'code' => '053',
                'name' => 'Chignahuapan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 1627,
                'code' => '054',
                'name' => 'Chignautla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 1628,
                'code' => '055',
                'name' => 'Chila',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 1629,
                'code' => '056',
                'name' => 'Chila de la Sal',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 1630,
                'code' => '057',
                'name' => 'Honey',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 1631,
                'code' => '058',
                'name' => 'Chilchotla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 1632,
                'code' => '059',
                'name' => 'Chinantla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 1633,
                'code' => '060',
                'name' => 'Domingo Arenas',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 1634,
                'code' => '061',
                'name' => 'Eloxochitlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 1635,
                'code' => '062',
                'name' => 'Epatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 1636,
                'code' => '063',
                'name' => 'Esperanza',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 1637,
                'code' => '064',
                'name' => 'Francisco Z. Mena',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 1638,
                'code' => '065',
                'name' => 'General Felipe Ángeles',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 1639,
                'code' => '066',
                'name' => 'Guadalupe',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 1640,
                'code' => '067',
                'name' => 'Guadalupe Victoria',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 1641,
                'code' => '068',
                'name' => 'Hermenegildo Galeana',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 1642,
                'code' => '069',
                'name' => 'Huaquechula',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 1643,
                'code' => '070',
                'name' => 'Huatlatlauca',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 1644,
                'code' => '071',
                'name' => 'Huauchinango',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 1645,
                'code' => '072',
                'name' => 'Huehuetla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 1646,
                'code' => '073',
                'name' => 'Huehuetlán el Chico',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 1647,
                'code' => '074',
                'name' => 'Huejotzingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 1648,
                'code' => '075',
                'name' => 'Hueyapan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 1649,
                'code' => '076',
                'name' => 'Hueytamalco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 1650,
                'code' => '077',
                'name' => 'Hueytlalpan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 1651,
                'code' => '078',
                'name' => 'Huitzilan de Serdán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 1652,
                'code' => '079',
                'name' => 'Huitziltepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 1653,
                'code' => '080',
                'name' => 'Atlequizayan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 1654,
                'code' => '081',
                'name' => 'Ixcamilpa de Guerrero',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 1655,
                'code' => '082',
                'name' => 'Ixcaquixtla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 1656,
                'code' => '083',
                'name' => 'Ixtacamaxtitlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 1657,
                'code' => '084',
                'name' => 'Ixtepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 1658,
                'code' => '085',
                'name' => 'Izúcar de Matamoros',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 1659,
                'code' => '086',
                'name' => 'Jalpan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 1660,
                'code' => '087',
                'name' => 'Jolalpan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 1661,
                'code' => '088',
                'name' => 'Jonotla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 1662,
                'code' => '089',
                'name' => 'Jopala',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 1663,
                'code' => '090',
                'name' => 'Juan C. Bonilla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 1664,
                'code' => '091',
                'name' => 'Juan Galindo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 1665,
                'code' => '092',
                'name' => 'Juan N. Méndez',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 1666,
                'code' => '093',
                'name' => 'Lafragua',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 1667,
                'code' => '094',
                'name' => 'Libres',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 1668,
                'code' => '095',
                'name' => 'La Magdalena Tlatlauquitepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 1669,
                'code' => '096',
                'name' => 'Mazapiltepec de Juárez',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 1670,
                'code' => '097',
                'name' => 'Mixtla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 1671,
                'code' => '098',
                'name' => 'Molcaxac',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 1672,
                'code' => '099',
                'name' => 'Cañada Morelos',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 1673,
                'code' => '100',
                'name' => 'Naupan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 1674,
                'code' => '101',
                'name' => 'Nauzontla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 1675,
                'code' => '102',
                'name' => 'Nealtican',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 1676,
                'code' => '103',
                'name' => 'Nicolás Bravo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 1677,
                'code' => '104',
                'name' => 'Nopalucan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 1678,
                'code' => '105',
                'name' => 'Ocotepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 1679,
                'code' => '106',
                'name' => 'Ocoyucan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 1680,
                'code' => '107',
                'name' => 'Olintla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 1681,
                'code' => '108',
                'name' => 'Oriental',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 1682,
                'code' => '109',
                'name' => 'Pahuatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 1683,
                'code' => '110',
                'name' => 'Palmar de Bravo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 1684,
                'code' => '111',
                'name' => 'Pantepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 1685,
                'code' => '112',
                'name' => 'Petlalcingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 1686,
                'code' => '113',
                'name' => 'Piaxtla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 1687,
                'code' => '114',
                'name' => 'Puebla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 1688,
                'code' => '115',
                'name' => 'Quecholac',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 1689,
                'code' => '116',
                'name' => 'Quimixtlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 1690,
                'code' => '117',
                'name' => 'Rafael Lara Grajales',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 1691,
                'code' => '118',
                'name' => 'Los Reyes de Juárez',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 1692,
                'code' => '119',
                'name' => 'San Andrés Cholula',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 1693,
                'code' => '120',
                'name' => 'San Antonio Cañada',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 1694,
                'code' => '121',
                'name' => 'San Diego la Mesa Tochimiltzingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 1695,
                'code' => '122',
                'name' => 'San Felipe Teotlalcingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 1696,
                'code' => '123',
                'name' => 'San Felipe Tepatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 1697,
                'code' => '124',
                'name' => 'San Gabriel Chilac',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 1698,
                'code' => '125',
                'name' => 'San Gregorio Atzompa',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 1699,
                'code' => '126',
                'name' => 'San Jerónimo Tecuanipan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 1700,
                'code' => '127',
                'name' => 'San Jerónimo Xayacatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 1701,
                'code' => '128',
                'name' => 'San José Chiapa',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 1702,
                'code' => '129',
                'name' => 'San José Miahuatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 1703,
                'code' => '130',
                'name' => 'San Juan Atenco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 1704,
                'code' => '131',
                'name' => 'San Juan Atzompa',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 1705,
                'code' => '132',
                'name' => 'San Martín Texmelucan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 1706,
                'code' => '133',
                'name' => 'San Martín Totoltepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 1707,
                'code' => '134',
                'name' => 'San Matías Tlalancaleca',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 1708,
                'code' => '135',
                'name' => 'San Miguel Ixitlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 1709,
                'code' => '136',
                'name' => 'San Miguel Xoxtla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 1710,
                'code' => '137',
                'name' => 'San Nicolás Buenos Aires',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 1711,
                'code' => '138',
                'name' => 'San Nicolás de los Ranchos',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 1712,
                'code' => '139',
                'name' => 'San Pablo Anicano',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 1713,
                'code' => '140',
                'name' => 'San Pedro Cholula',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 1714,
                'code' => '141',
                'name' => 'San Pedro Yeloixtlahuaca',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 1715,
                'code' => '142',
                'name' => 'San Salvador el Seco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 1716,
                'code' => '143',
                'name' => 'San Salvador el Verde',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 1717,
                'code' => '144',
                'name' => 'San Salvador Huixcolotla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 1718,
                'code' => '145',
                'name' => 'San Sebastián Tlacotepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 1719,
                'code' => '146',
                'name' => 'Santa Catarina Tlaltempan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 1720,
                'code' => '147',
                'name' => 'Santa Inés Ahuatempan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 1721,
                'code' => '148',
                'name' => 'Santa Isabel Cholula',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 1722,
                'code' => '149',
                'name' => 'Santiago Miahuatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 1723,
                'code' => '150',
                'name' => 'Huehuetlán el Grande',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 1724,
                'code' => '151',
                'name' => 'Santo Tomás Hueyotlipan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 1725,
                'code' => '152',
                'name' => 'Soltepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 1726,
                'code' => '153',
                'name' => 'Tecali de Herrera',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 1727,
                'code' => '154',
                'name' => 'Tecamachalco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 1728,
                'code' => '155',
                'name' => 'Tecomatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 1729,
                'code' => '156',
                'name' => 'Tehuacán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 1730,
                'code' => '157',
                'name' => 'Tehuitzingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 1731,
                'code' => '158',
                'name' => 'Tenampulco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 1732,
                'code' => '159',
                'name' => 'Teopantlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 1733,
                'code' => '160',
                'name' => 'Teotlalco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 1734,
                'code' => '161',
                'name' => 'Tepanco de López',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 1735,
                'code' => '162',
                'name' => 'Tepango de Rodríguez',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 1736,
                'code' => '163',
                'name' => 'Tepatlaxco de Hidalgo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 1737,
                'code' => '164',
                'name' => 'Tepeaca',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 1738,
                'code' => '165',
                'name' => 'Tepemaxalco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 1739,
                'code' => '166',
                'name' => 'Tepeojuma',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 1740,
                'code' => '167',
                'name' => 'Tepetzintla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 1741,
                'code' => '168',
                'name' => 'Tepexco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 1742,
                'code' => '169',
                'name' => 'Tepexi de Rodríguez',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 1743,
                'code' => '170',
                'name' => 'Tepeyahualco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 1744,
                'code' => '171',
                'name' => 'Tepeyahualco de Cuauhtémoc',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 1745,
                'code' => '172',
                'name' => 'Tetela de Ocampo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 1746,
                'code' => '173',
                'name' => 'Teteles de Avila Castillo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 1747,
                'code' => '174',
                'name' => 'Teziutlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 1748,
                'code' => '175',
                'name' => 'Tianguismanalco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 1749,
                'code' => '176',
                'name' => 'Tilapa',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 1750,
                'code' => '177',
                'name' => 'Tlacotepec de Benito Juárez',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 1751,
                'code' => '178',
                'name' => 'Tlacuilotepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 1752,
                'code' => '179',
                'name' => 'Tlachichuca',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 1753,
                'code' => '180',
                'name' => 'Tlahuapan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 1754,
                'code' => '181',
                'name' => 'Tlaltenango',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 1755,
                'code' => '182',
                'name' => 'Tlanepantla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 1756,
                'code' => '183',
                'name' => 'Tlaola',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 1757,
                'code' => '184',
                'name' => 'Tlapacoya',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 1758,
                'code' => '185',
                'name' => 'Tlapanalá',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 1759,
                'code' => '186',
                'name' => 'Tlatlauquitepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 1760,
                'code' => '187',
                'name' => 'Tlaxco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 1761,
                'code' => '188',
                'name' => 'Tochimilco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 1762,
                'code' => '189',
                'name' => 'Tochtepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 1763,
                'code' => '190',
                'name' => 'Totoltepec de Guerrero',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 1764,
                'code' => '191',
                'name' => 'Tulcingo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 1765,
                'code' => '192',
                'name' => 'Tuzamapan de Galeana',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 1766,
                'code' => '193',
                'name' => 'Tzicatlacoyan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 1767,
                'code' => '194',
                'name' => 'Venustiano Carranza',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 1768,
                'code' => '195',
                'name' => 'Vicente Guerrero',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 1769,
                'code' => '196',
                'name' => 'Xayacatlán de Bravo',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 1770,
                'code' => '197',
                'name' => 'Xicotepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 1771,
                'code' => '198',
                'name' => 'Xicotlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 1772,
                'code' => '199',
                'name' => 'Xiutetelco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 1773,
                'code' => '200',
                'name' => 'Xochiapulco',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 1774,
                'code' => '201',
                'name' => 'Xochiltepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 1775,
                'code' => '202',
                'name' => 'Xochitlán de Vicente Suárez',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 1776,
                'code' => '203',
                'name' => 'Xochitlán Todos Santos',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 1777,
                'code' => '204',
                'name' => 'Yaonáhuac',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 1778,
                'code' => '205',
                'name' => 'Yehualtepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 1779,
                'code' => '206',
                'name' => 'Zacapala',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 1780,
                'code' => '207',
                'name' => 'Zacapoaxtla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 1781,
                'code' => '208',
                'name' => 'Zacatlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 1782,
                'code' => '209',
                'name' => 'Zapotitlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 1783,
                'code' => '210',
                'name' => 'Zapotitlán de Méndez',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 1784,
                'code' => '211',
                'name' => 'Zaragoza',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 1785,
                'code' => '212',
                'name' => 'Zautla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 1786,
                'code' => '213',
                'name' => 'Zihuateutla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 1787,
                'code' => '214',
                'name' => 'Zinacatepec',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 1788,
                'code' => '215',
                'name' => 'Zongozotla',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 1789,
                'code' => '216',
                'name' => 'Zoquiapan',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 1790,
                'code' => '217',
                'name' => 'Zoquitlán',
                'state_id' => 21,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 1791,
                'code' => '001',
                'name' => 'Amealco de Bonfil',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 1792,
                'code' => '002',
                'name' => 'Pinal de Amoles',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 1793,
                'code' => '003',
                'name' => 'Arroyo Seco',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 1794,
                'code' => '004',
                'name' => 'Cadereyta de Montes',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 1795,
                'code' => '005',
                'name' => 'Colón',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 1796,
                'code' => '006',
                'name' => 'Corregidora',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 1797,
                'code' => '007',
                'name' => 'Ezequiel Montes',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 1798,
                'code' => '008',
                'name' => 'Huimilpan',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 1799,
                'code' => '009',
                'name' => 'Jalpan de Serra',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 1800,
                'code' => '010',
                'name' => 'Landa de Matamoros',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 1801,
                'code' => '011',
                'name' => 'El Marqués',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 1802,
                'code' => '012',
                'name' => 'Pedro Escobedo',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 1803,
                'code' => '013',
                'name' => 'Peñamiller',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 1804,
                'code' => '014',
                'name' => 'Querétaro',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 1805,
                'code' => '015',
                'name' => 'San Joaquín',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 1806,
                'code' => '016',
                'name' => 'San Juan del Río',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 1807,
                'code' => '017',
                'name' => 'Tequisquiapan',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 1808,
                'code' => '018',
                'name' => 'Tolimán',
                'state_id' => 22,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 1809,
                'code' => '001',
                'name' => 'Cozumel',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 1810,
                'code' => '002',
                'name' => 'Felipe Carrillo Puerto',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 1811,
                'code' => '003',
                'name' => 'Isla Mujeres',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 1812,
                'code' => '004',
                'name' => 'Othón P. Blanco',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 1813,
                'code' => '005',
                'name' => 'Benito Juárez',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 1814,
                'code' => '006',
                'name' => 'José María Morelos',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 1815,
                'code' => '007',
                'name' => 'Lázaro Cárdenas',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 1816,
                'code' => '008',
                'name' => 'Solidaridad',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 1817,
                'code' => '009',
                'name' => 'Tulum',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 1818,
                'code' => '010',
                'name' => 'Bacalar',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 1819,
                'code' => '011',
                'name' => 'Puerto Morelos',
                'state_id' => 23,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 1820,
                'code' => '001',
                'name' => 'Ahualulco',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 1821,
                'code' => '002',
                'name' => 'Alaquines',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 1822,
                'code' => '003',
                'name' => 'Aquismón',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 1823,
                'code' => '004',
                'name' => 'Armadillo de los Infante',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 1824,
                'code' => '005',
                'name' => 'Cárdenas',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 1825,
                'code' => '006',
                'name' => 'Catorce',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 1826,
                'code' => '007',
                'name' => 'Cedral',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 1827,
                'code' => '008',
                'name' => 'Cerritos',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 1828,
                'code' => '009',
                'name' => 'Cerro de San Pedro',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 1829,
                'code' => '010',
                'name' => 'Ciudad del Maíz',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 1830,
                'code' => '011',
                'name' => 'Ciudad Fernández',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 1831,
                'code' => '012',
                'name' => 'Tancanhuitz',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 1832,
                'code' => '013',
                'name' => 'Ciudad Valles',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 1833,
                'code' => '014',
                'name' => 'Coxcatlán',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 1834,
                'code' => '015',
                'name' => 'Charcas',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 1835,
                'code' => '016',
                'name' => 'Ebano',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 1836,
                'code' => '017',
                'name' => 'Guadalcázar',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 1837,
                'code' => '018',
                'name' => 'Huehuetlán',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 1838,
                'code' => '019',
                'name' => 'Lagunillas',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 1839,
                'code' => '020',
                'name' => 'Matehuala',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 1840,
                'code' => '021',
                'name' => 'Mexquitic de Carmona',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 1841,
                'code' => '022',
                'name' => 'Moctezuma',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 1842,
                'code' => '023',
                'name' => 'Rayón',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 1843,
                'code' => '024',
                'name' => 'Rioverde',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 1844,
                'code' => '025',
                'name' => 'Salinas',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 1845,
                'code' => '026',
                'name' => 'San Antonio',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 1846,
                'code' => '027',
                'name' => 'San Ciro de Acosta',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 1847,
                'code' => '028',
                'name' => 'San Luis Potosí',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 1848,
                'code' => '029',
                'name' => 'San Martín Chalchicuautla',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 1849,
                'code' => '030',
                'name' => 'San Nicolás Tolentino',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 1850,
                'code' => '031',
                'name' => 'Santa Catarina',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 1851,
                'code' => '032',
                'name' => 'Santa María del Río',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 1852,
                'code' => '033',
                'name' => 'Santo Domingo',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 1853,
                'code' => '034',
                'name' => 'San Vicente Tancuayalab',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 1854,
                'code' => '035',
                'name' => 'Soledad de Graciano Sánchez',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 1855,
                'code' => '036',
                'name' => 'Tamasopo',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 1856,
                'code' => '037',
                'name' => 'Tamazunchale',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 1857,
                'code' => '038',
                'name' => 'Tampacán',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 1858,
                'code' => '039',
                'name' => 'Tampamolón Corona',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 1859,
                'code' => '040',
                'name' => 'Tamuín',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 1860,
                'code' => '041',
                'name' => 'Tanlajás',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 1861,
                'code' => '042',
                'name' => 'Tanquián de Escobedo',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 1862,
                'code' => '043',
                'name' => 'Tierra Nueva',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 1863,
                'code' => '044',
                'name' => 'Vanegas',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 1864,
                'code' => '045',
                'name' => 'Venado',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 1865,
                'code' => '046',
                'name' => 'Villa de Arriaga',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 1866,
                'code' => '047',
                'name' => 'Villa de Guadalupe',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 1867,
                'code' => '048',
                'name' => 'Villa de la Paz',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 1868,
                'code' => '049',
                'name' => 'Villa de Ramos',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 1869,
                'code' => '050',
                'name' => 'Villa de Reyes',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 1870,
                'code' => '051',
                'name' => 'Villa Hidalgo',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 1871,
                'code' => '052',
                'name' => 'Villa Juárez',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 1872,
                'code' => '053',
                'name' => 'Axtla de Terrazas',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 1873,
                'code' => '054',
                'name' => 'Xilitla',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 1874,
                'code' => '055',
                'name' => 'Zaragoza',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 1875,
                'code' => '056',
                'name' => 'Villa de Arista',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 1876,
                'code' => '057',
                'name' => 'Matlapa',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 1877,
                'code' => '058',
                'name' => 'El Naranjo',
                'state_id' => 24,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 1878,
                'code' => '001',
                'name' => 'Ahome',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 1879,
                'code' => '002',
                'name' => 'Angostura',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 1880,
                'code' => '003',
                'name' => 'Badiraguato',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 1881,
                'code' => '004',
                'name' => 'Concordia',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 1882,
                'code' => '005',
                'name' => 'Cosalá',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 1883,
                'code' => '006',
                'name' => 'Culiacán',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 1884,
                'code' => '007',
                'name' => 'Choix',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 1885,
                'code' => '008',
                'name' => 'Elota',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 1886,
                'code' => '009',
                'name' => 'Escuinapa',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 1887,
                'code' => '010',
                'name' => 'El Fuerte',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 1888,
                'code' => '011',
                'name' => 'Guasave',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 1889,
                'code' => '012',
                'name' => 'Mazatlán',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 1890,
                'code' => '013',
                'name' => 'Mocorito',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 1891,
                'code' => '014',
                'name' => 'Rosario',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 1892,
                'code' => '015',
                'name' => 'Salvador Alvarado',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 1893,
                'code' => '016',
                'name' => 'San Ignacio',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 1894,
                'code' => '017',
                'name' => 'Sinaloa',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 1895,
                'code' => '018',
                'name' => 'Navolato',
                'state_id' => 25,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 1896,
                'code' => '001',
                'name' => 'Aconchi',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 1897,
                'code' => '002',
                'name' => 'Agua Prieta',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 1898,
                'code' => '003',
                'name' => 'Alamos',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 1899,
                'code' => '004',
                'name' => 'Altar',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 1900,
                'code' => '005',
                'name' => 'Arivechi',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 1901,
                'code' => '006',
                'name' => 'Arizpe',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 1902,
                'code' => '007',
                'name' => 'Atil',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 1903,
                'code' => '008',
                'name' => 'Bacadéhuachi',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 1904,
                'code' => '009',
                'name' => 'Bacanora',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 1905,
                'code' => '010',
                'name' => 'Bacerac',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 1906,
                'code' => '011',
                'name' => 'Bacoachi',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 1907,
                'code' => '012',
                'name' => 'Bácum',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 1908,
                'code' => '013',
                'name' => 'Banámichi',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 1909,
                'code' => '014',
                'name' => 'Baviácora',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 1910,
                'code' => '015',
                'name' => 'Bavispe',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 1911,
                'code' => '016',
                'name' => 'Benjamín Hill',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 1912,
                'code' => '017',
                'name' => 'Caborca',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 1913,
                'code' => '018',
                'name' => 'Cajeme',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 1914,
                'code' => '019',
                'name' => 'Cananea',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 1915,
                'code' => '020',
                'name' => 'Carbó',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 1916,
                'code' => '021',
                'name' => 'La Colorada',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 1917,
                'code' => '022',
                'name' => 'Cucurpe',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 1918,
                'code' => '023',
                'name' => 'Cumpas',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 1919,
                'code' => '024',
                'name' => 'Divisaderos',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 1920,
                'code' => '025',
                'name' => 'Empalme',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 1921,
                'code' => '026',
                'name' => 'Etchojoa',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 1922,
                'code' => '027',
                'name' => 'Fronteras',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 1923,
                'code' => '028',
                'name' => 'Granados',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 1924,
                'code' => '029',
                'name' => 'Guaymas',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 1925,
                'code' => '030',
                'name' => 'Hermosillo',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 1926,
                'code' => '031',
                'name' => 'Huachinera',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 1927,
                'code' => '032',
                'name' => 'Huásabas',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 1928,
                'code' => '033',
                'name' => 'Huatabampo',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 1929,
                'code' => '034',
                'name' => 'Huépac',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 1930,
                'code' => '035',
                'name' => 'Imuris',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 1931,
                'code' => '036',
                'name' => 'Magdalena',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 1932,
                'code' => '037',
                'name' => 'Mazatán',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 1933,
                'code' => '038',
                'name' => 'Moctezuma',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 1934,
                'code' => '039',
                'name' => 'Naco',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 1935,
                'code' => '040',
                'name' => 'Nácori Chico',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 1936,
                'code' => '041',
                'name' => 'Nacozari de García',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 1937,
                'code' => '042',
                'name' => 'Navojoa',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 1938,
                'code' => '043',
                'name' => 'Nogales',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 1939,
                'code' => '044',
                'name' => 'Onavas',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 1940,
                'code' => '045',
                'name' => 'Opodepe',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 1941,
                'code' => '046',
                'name' => 'Oquitoa',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 1942,
                'code' => '047',
                'name' => 'Pitiquito',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 1943,
                'code' => '048',
                'name' => 'Puerto Peñasco',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 1944,
                'code' => '049',
                'name' => 'Quiriego',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 1945,
                'code' => '050',
                'name' => 'Rayón',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 1946,
                'code' => '051',
                'name' => 'Rosario',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 1947,
                'code' => '052',
                'name' => 'Sahuaripa',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 1948,
                'code' => '053',
                'name' => 'San Felipe de Jesús',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 1949,
                'code' => '054',
                'name' => 'San Javier',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 1950,
                'code' => '055',
                'name' => 'San Luis Río Colorado',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 1951,
                'code' => '056',
                'name' => 'San Miguel de Horcasitas',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 1952,
                'code' => '057',
                'name' => 'San Pedro de la Cueva',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 1953,
                'code' => '058',
                'name' => 'Santa Ana',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 1954,
                'code' => '059',
                'name' => 'Santa Cruz',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 1955,
                'code' => '060',
                'name' => 'Sáric',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 1956,
                'code' => '061',
                'name' => 'Soyopa',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 1957,
                'code' => '062',
                'name' => 'Suaqui Grande',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 1958,
                'code' => '063',
                'name' => 'Tepache',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 1959,
                'code' => '064',
                'name' => 'Trincheras',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 1960,
                'code' => '065',
                'name' => 'Tubutama',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 1961,
                'code' => '066',
                'name' => 'Ures',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 1962,
                'code' => '067',
                'name' => 'Villa Hidalgo',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 1963,
                'code' => '068',
                'name' => 'Villa Pesqueira',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            463 => 
            array (
                'id' => 1964,
                'code' => '069',
                'name' => 'Yécora',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            464 => 
            array (
                'id' => 1965,
                'code' => '070',
                'name' => 'General Plutarco Elías Calles',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            465 => 
            array (
                'id' => 1966,
                'code' => '071',
                'name' => 'Benito Juárez',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            466 => 
            array (
                'id' => 1967,
                'code' => '072',
                'name' => 'San Ignacio Río Muerto',
                'state_id' => 26,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            467 => 
            array (
                'id' => 1968,
                'code' => '001',
                'name' => 'Balancán',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            468 => 
            array (
                'id' => 1969,
                'code' => '002',
                'name' => 'Cárdenas',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            469 => 
            array (
                'id' => 1970,
                'code' => '003',
                'name' => 'Centla',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            470 => 
            array (
                'id' => 1971,
                'code' => '004',
                'name' => 'Centro',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            471 => 
            array (
                'id' => 1972,
                'code' => '005',
                'name' => 'Comalcalco',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            472 => 
            array (
                'id' => 1973,
                'code' => '006',
                'name' => 'Cunduacán',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            473 => 
            array (
                'id' => 1974,
                'code' => '007',
                'name' => 'Emiliano Zapata',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            474 => 
            array (
                'id' => 1975,
                'code' => '008',
                'name' => 'Huimanguillo',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            475 => 
            array (
                'id' => 1976,
                'code' => '009',
                'name' => 'Jalapa',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            476 => 
            array (
                'id' => 1977,
                'code' => '010',
                'name' => 'Jalpa de Méndez',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            477 => 
            array (
                'id' => 1978,
                'code' => '011',
                'name' => 'Jonuta',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            478 => 
            array (
                'id' => 1979,
                'code' => '012',
                'name' => 'Macuspana',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            479 => 
            array (
                'id' => 1980,
                'code' => '013',
                'name' => 'Nacajuca',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            480 => 
            array (
                'id' => 1981,
                'code' => '014',
                'name' => 'Paraíso',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            481 => 
            array (
                'id' => 1982,
                'code' => '015',
                'name' => 'Tacotalpa',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            482 => 
            array (
                'id' => 1983,
                'code' => '016',
                'name' => 'Teapa',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            483 => 
            array (
                'id' => 1984,
                'code' => '017',
                'name' => 'Tenosique',
                'state_id' => 27,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            484 => 
            array (
                'id' => 1985,
                'code' => '001',
                'name' => 'Abasolo',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            485 => 
            array (
                'id' => 1986,
                'code' => '002',
                'name' => 'Aldama',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            486 => 
            array (
                'id' => 1987,
                'code' => '003',
                'name' => 'Altamira',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            487 => 
            array (
                'id' => 1988,
                'code' => '004',
                'name' => 'Antiguo Morelos',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            488 => 
            array (
                'id' => 1989,
                'code' => '005',
                'name' => 'Burgos',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            489 => 
            array (
                'id' => 1990,
                'code' => '006',
                'name' => 'Bustamante',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            490 => 
            array (
                'id' => 1991,
                'code' => '007',
                'name' => 'Camargo',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            491 => 
            array (
                'id' => 1992,
                'code' => '008',
                'name' => 'Casas',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            492 => 
            array (
                'id' => 1993,
                'code' => '009',
                'name' => 'Ciudad Madero',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            493 => 
            array (
                'id' => 1994,
                'code' => '010',
                'name' => 'Cruillas',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            494 => 
            array (
                'id' => 1995,
                'code' => '011',
                'name' => 'Gómez Farías',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            495 => 
            array (
                'id' => 1996,
                'code' => '012',
                'name' => 'González',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            496 => 
            array (
                'id' => 1997,
                'code' => '013',
                'name' => 'Güémez',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            497 => 
            array (
                'id' => 1998,
                'code' => '014',
                'name' => 'Guerrero',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            498 => 
            array (
                'id' => 1999,
                'code' => '015',
                'name' => 'Gustavo Díaz Ordaz',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            499 => 
            array (
                'id' => 2000,
                'code' => '016',
                'name' => 'Hidalgo',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        \DB::table('address_cities')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'code' => '017',
                'name' => 'Jaumave',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2002,
                'code' => '018',
                'name' => 'Jiménez',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 2003,
                'code' => '019',
                'name' => 'Llera',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 2004,
                'code' => '020',
                'name' => 'Mainero',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 2005,
                'code' => '021',
                'name' => 'El Mante',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 2006,
                'code' => '022',
                'name' => 'Matamoros',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 2007,
                'code' => '023',
                'name' => 'Méndez',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 2008,
                'code' => '024',
                'name' => 'Mier',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 2009,
                'code' => '025',
                'name' => 'Miguel Alemán',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 2010,
                'code' => '026',
                'name' => 'Miquihuana',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 2011,
                'code' => '027',
                'name' => 'Nuevo Laredo',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 2012,
                'code' => '028',
                'name' => 'Nuevo Morelos',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 2013,
                'code' => '029',
                'name' => 'Ocampo',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 2014,
                'code' => '030',
                'name' => 'Padilla',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 2015,
                'code' => '031',
                'name' => 'Palmillas',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 2016,
                'code' => '032',
                'name' => 'Reynosa',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 2017,
                'code' => '033',
                'name' => 'Río Bravo',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 2018,
                'code' => '034',
                'name' => 'San Carlos',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 2019,
                'code' => '035',
                'name' => 'San Fernando',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 2020,
                'code' => '036',
                'name' => 'San Nicolás',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 2021,
                'code' => '037',
                'name' => 'Soto la Marina',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 2022,
                'code' => '038',
                'name' => 'Tampico',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 2023,
                'code' => '039',
                'name' => 'Tula',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 2024,
                'code' => '040',
                'name' => 'Valle Hermoso',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 2025,
                'code' => '041',
                'name' => 'Victoria',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 2026,
                'code' => '042',
                'name' => 'Villagrán',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 2027,
                'code' => '043',
                'name' => 'Xicoténcatl',
                'state_id' => 28,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 2028,
                'code' => '001',
                'name' => 'Amaxac de Guerrero',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 2029,
                'code' => '002',
                'name' => 'Apetatitlán de Antonio Carvajal',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 2030,
                'code' => '003',
                'name' => 'Atlangatepec',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 2031,
                'code' => '004',
                'name' => 'Atltzayanca',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 2032,
                'code' => '005',
                'name' => 'Apizaco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 2033,
                'code' => '006',
                'name' => 'Calpulalpan',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 2034,
                'code' => '007',
                'name' => 'El Carmen Tequexquitla',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 2035,
                'code' => '008',
                'name' => 'Cuapiaxtla',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 2036,
                'code' => '009',
                'name' => 'Cuaxomulco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 2037,
                'code' => '010',
                'name' => 'Chiautempan',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 2038,
                'code' => '011',
                'name' => 'Muñoz de Domingo Arenas',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 2039,
                'code' => '012',
                'name' => 'Españita',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 2040,
                'code' => '013',
                'name' => 'Huamantla',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 2041,
                'code' => '014',
                'name' => 'Hueyotlipan',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 2042,
                'code' => '015',
                'name' => 'Ixtacuixtla de Mariano Matamoros',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 2043,
                'code' => '016',
                'name' => 'Ixtenco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 2044,
                'code' => '017',
                'name' => 'Mazatecochco de José María Morelos',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 2045,
                'code' => '018',
                'name' => 'Contla de Juan Cuamatzi',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 2046,
                'code' => '019',
                'name' => 'Tepetitla de Lardizábal',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 2047,
                'code' => '020',
                'name' => 'Sanctórum de Lázaro Cárdenas',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 2048,
                'code' => '021',
                'name' => 'Nanacamilpa de Mariano Arista',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 2049,
                'code' => '022',
                'name' => 'Acuamanala de Miguel Hidalgo',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 2050,
                'code' => '023',
                'name' => 'Natívitas',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 2051,
                'code' => '024',
                'name' => 'Panotla',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 2052,
                'code' => '025',
                'name' => 'San Pablo del Monte',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 2053,
                'code' => '026',
                'name' => 'Santa Cruz Tlaxcala',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 2054,
                'code' => '027',
                'name' => 'Tenancingo',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 2055,
                'code' => '028',
                'name' => 'Teolocholco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 2056,
                'code' => '029',
                'name' => 'Tepeyanco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 2057,
                'code' => '030',
                'name' => 'Terrenate',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 2058,
                'code' => '031',
                'name' => 'Tetla de la Solidaridad',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 2059,
                'code' => '032',
                'name' => 'Tetlatlahuca',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 2060,
                'code' => '033',
                'name' => 'Tlaxcala',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 2061,
                'code' => '034',
                'name' => 'Tlaxco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 2062,
                'code' => '035',
                'name' => 'Tocatlán',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 2063,
                'code' => '036',
                'name' => 'Totolac',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 2064,
                'code' => '037',
                'name' => 'Ziltlaltépec de Trinidad Sánchez Santos',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 2065,
                'code' => '038',
                'name' => 'Tzompantepec',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 2066,
                'code' => '039',
                'name' => 'Xaloztoc',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 2067,
                'code' => '040',
                'name' => 'Xaltocan',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 2068,
                'code' => '041',
                'name' => 'Papalotla de Xicohténcatl',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 2069,
                'code' => '042',
                'name' => 'Xicohtzinco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 2070,
                'code' => '043',
                'name' => 'Yauhquemehcan',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 2071,
                'code' => '044',
                'name' => 'Zacatelco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 2072,
                'code' => '045',
                'name' => 'Benito Juárez',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 2073,
                'code' => '046',
                'name' => 'Emiliano Zapata',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 2074,
                'code' => '047',
                'name' => 'Lázaro Cárdenas',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 2200,
                'code' => '113',
                'name' => 'Naranjal',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 2075,
                'code' => '048',
                'name' => 'La Magdalena Tlaltelulco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 2076,
                'code' => '049',
                'name' => 'San Damián Texóloc',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 2077,
                'code' => '050',
                'name' => 'San Francisco Tetlanohcan',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 2078,
                'code' => '051',
                'name' => 'San Jerónimo Zacualpan',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 2079,
                'code' => '052',
                'name' => 'San José Teacalco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 2080,
                'code' => '053',
                'name' => 'San Juan Huactzinco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 2081,
                'code' => '054',
                'name' => 'San Lorenzo Axocomanitla',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 2082,
                'code' => '055',
                'name' => 'San Lucas Tecopilco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 2083,
                'code' => '056',
                'name' => 'Santa Ana Nopalucan',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 2084,
                'code' => '057',
                'name' => 'Santa Apolonia Teacalco',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 2085,
                'code' => '058',
                'name' => 'Santa Catarina Ayometla',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 2086,
                'code' => '059',
                'name' => 'Santa Cruz Quilehtla',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 2087,
                'code' => '060',
                'name' => 'Santa Isabel Xiloxoxtla',
                'state_id' => 29,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 2088,
                'code' => '001',
                'name' => 'Acajete',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 2089,
                'code' => '002',
                'name' => 'Acatlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 2090,
                'code' => '003',
                'name' => 'Acayucan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 2091,
                'code' => '004',
                'name' => 'Actopan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 2092,
                'code' => '005',
                'name' => 'Acula',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 2093,
                'code' => '006',
                'name' => 'Acultzingo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 2094,
                'code' => '007',
                'name' => 'Camarón de Tejeda',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 2095,
                'code' => '008',
                'name' => 'Alpatláhuac',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 2096,
                'code' => '009',
                'name' => 'Alto Lucero de Gutiérrez Barrios',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 2097,
                'code' => '010',
                'name' => 'Altotonga',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 2098,
                'code' => '011',
                'name' => 'Alvarado',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 2099,
                'code' => '012',
                'name' => 'Amatitlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 2100,
                'code' => '013',
                'name' => 'Naranjos Amatlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 2101,
                'code' => '014',
                'name' => 'Amatlán de los Reyes',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 2102,
                'code' => '015',
                'name' => 'Angel R. Cabada',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 2103,
                'code' => '016',
                'name' => 'La Antigua',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 2104,
                'code' => '017',
                'name' => 'Apazapan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 2105,
                'code' => '018',
                'name' => 'Aquila',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 2106,
                'code' => '019',
                'name' => 'Astacinga',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 2107,
                'code' => '020',
                'name' => 'Atlahuilco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 2108,
                'code' => '021',
                'name' => 'Atoyac',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 2109,
                'code' => '022',
                'name' => 'Atzacan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 2110,
                'code' => '023',
                'name' => 'Atzalan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 2111,
                'code' => '024',
                'name' => 'Tlaltetela',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 2112,
                'code' => '025',
                'name' => 'Ayahualulco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 2113,
                'code' => '026',
                'name' => 'Banderilla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 2114,
                'code' => '027',
                'name' => 'Benito Juárez',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            115 => 
            array (
                'id' => 2115,
                'code' => '028',
                'name' => 'Boca del Río',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            116 => 
            array (
                'id' => 2116,
                'code' => '029',
                'name' => 'Calcahualco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            117 => 
            array (
                'id' => 2117,
                'code' => '030',
                'name' => 'Camerino Z. Mendoza',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            118 => 
            array (
                'id' => 2118,
                'code' => '031',
                'name' => 'Carrillo Puerto',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            119 => 
            array (
                'id' => 2119,
                'code' => '032',
                'name' => 'Catemaco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            120 => 
            array (
                'id' => 2120,
                'code' => '033',
                'name' => 'Cazones de Herrera',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            121 => 
            array (
                'id' => 2121,
                'code' => '034',
                'name' => 'Cerro Azul',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            122 => 
            array (
                'id' => 2122,
                'code' => '035',
                'name' => 'Citlaltépetl',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            123 => 
            array (
                'id' => 2123,
                'code' => '036',
                'name' => 'Coacoatzintla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            124 => 
            array (
                'id' => 2124,
                'code' => '037',
                'name' => 'Coahuitlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            125 => 
            array (
                'id' => 2125,
                'code' => '038',
                'name' => 'Coatepec',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            126 => 
            array (
                'id' => 2126,
                'code' => '039',
                'name' => 'Coatzacoalcos',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            127 => 
            array (
                'id' => 2127,
                'code' => '040',
                'name' => 'Coatzintla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            128 => 
            array (
                'id' => 2128,
                'code' => '041',
                'name' => 'Coetzala',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            129 => 
            array (
                'id' => 2129,
                'code' => '042',
                'name' => 'Colipa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            130 => 
            array (
                'id' => 2130,
                'code' => '043',
                'name' => 'Comapa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            131 => 
            array (
                'id' => 2131,
                'code' => '044',
                'name' => 'Córdoba',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            132 => 
            array (
                'id' => 2132,
                'code' => '045',
                'name' => 'Cosamaloapan de Carpio',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            133 => 
            array (
                'id' => 2133,
                'code' => '046',
                'name' => 'Cosautlán de Carvajal',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            134 => 
            array (
                'id' => 2134,
                'code' => '047',
                'name' => 'Coscomatepec',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            135 => 
            array (
                'id' => 2135,
                'code' => '048',
                'name' => 'Cosoleacaque',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            136 => 
            array (
                'id' => 2136,
                'code' => '049',
                'name' => 'Cotaxtla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            137 => 
            array (
                'id' => 2137,
                'code' => '050',
                'name' => 'Coxquihui',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            138 => 
            array (
                'id' => 2138,
                'code' => '051',
                'name' => 'Coyutla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            139 => 
            array (
                'id' => 2139,
                'code' => '052',
                'name' => 'Cuichapa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            140 => 
            array (
                'id' => 2140,
                'code' => '053',
                'name' => 'Cuitláhuac',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            141 => 
            array (
                'id' => 2141,
                'code' => '054',
                'name' => 'Chacaltianguis',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            142 => 
            array (
                'id' => 2142,
                'code' => '055',
                'name' => 'Chalma',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            143 => 
            array (
                'id' => 2143,
                'code' => '056',
                'name' => 'Chiconamel',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            144 => 
            array (
                'id' => 2144,
                'code' => '057',
                'name' => 'Chiconquiaco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            145 => 
            array (
                'id' => 2145,
                'code' => '058',
                'name' => 'Chicontepec',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            146 => 
            array (
                'id' => 2146,
                'code' => '059',
                'name' => 'Chinameca',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            147 => 
            array (
                'id' => 2147,
                'code' => '060',
                'name' => 'Chinampa de Gorostiza',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            148 => 
            array (
                'id' => 2148,
                'code' => '061',
                'name' => 'Las Choapas',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            149 => 
            array (
                'id' => 2149,
                'code' => '062',
                'name' => 'Chocamán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            150 => 
            array (
                'id' => 2150,
                'code' => '063',
                'name' => 'Chontla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            151 => 
            array (
                'id' => 2151,
                'code' => '064',
                'name' => 'Chumatlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            152 => 
            array (
                'id' => 2152,
                'code' => '065',
                'name' => 'Emiliano Zapata',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            153 => 
            array (
                'id' => 2153,
                'code' => '066',
                'name' => 'Espinal',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            154 => 
            array (
                'id' => 2154,
                'code' => '067',
                'name' => 'Filomeno Mata',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            155 => 
            array (
                'id' => 2155,
                'code' => '068',
                'name' => 'Fortín',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            156 => 
            array (
                'id' => 2156,
                'code' => '069',
                'name' => 'Gutiérrez Zamora',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            157 => 
            array (
                'id' => 2157,
                'code' => '070',
                'name' => 'Hidalgotitlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            158 => 
            array (
                'id' => 2158,
                'code' => '071',
                'name' => 'Huatusco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            159 => 
            array (
                'id' => 2159,
                'code' => '072',
                'name' => 'Huayacocotla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            160 => 
            array (
                'id' => 2160,
                'code' => '073',
                'name' => 'Hueyapan de Ocampo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            161 => 
            array (
                'id' => 2161,
                'code' => '074',
                'name' => 'Huiloapan de Cuauhtémoc',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            162 => 
            array (
                'id' => 2162,
                'code' => '075',
                'name' => 'Ignacio de la Llave',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            163 => 
            array (
                'id' => 2163,
                'code' => '076',
                'name' => 'Ilamatlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            164 => 
            array (
                'id' => 2164,
                'code' => '077',
                'name' => 'Isla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            165 => 
            array (
                'id' => 2165,
                'code' => '078',
                'name' => 'Ixcatepec',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            166 => 
            array (
                'id' => 2166,
                'code' => '079',
                'name' => 'Ixhuacán de los Reyes',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            167 => 
            array (
                'id' => 2167,
                'code' => '080',
                'name' => 'Ixhuatlán del Café',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            168 => 
            array (
                'id' => 2168,
                'code' => '081',
                'name' => 'Ixhuatlancillo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            169 => 
            array (
                'id' => 2169,
                'code' => '082',
                'name' => 'Ixhuatlán del Sureste',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            170 => 
            array (
                'id' => 2170,
                'code' => '083',
                'name' => 'Ixhuatlán de Madero',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            171 => 
            array (
                'id' => 2171,
                'code' => '084',
                'name' => 'Ixmatlahuacan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            172 => 
            array (
                'id' => 2172,
                'code' => '085',
                'name' => 'Ixtaczoquitlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            173 => 
            array (
                'id' => 2173,
                'code' => '086',
                'name' => 'Jalacingo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            174 => 
            array (
                'id' => 2174,
                'code' => '087',
                'name' => 'Xalapa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            175 => 
            array (
                'id' => 2175,
                'code' => '088',
                'name' => 'Jalcomulco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            176 => 
            array (
                'id' => 2176,
                'code' => '089',
                'name' => 'Jáltipan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            177 => 
            array (
                'id' => 2177,
                'code' => '090',
                'name' => 'Jamapa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            178 => 
            array (
                'id' => 2178,
                'code' => '091',
                'name' => 'Jesús Carranza',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            179 => 
            array (
                'id' => 2179,
                'code' => '092',
                'name' => 'Xico',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            180 => 
            array (
                'id' => 2180,
                'code' => '093',
                'name' => 'Jilotepec',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            181 => 
            array (
                'id' => 2181,
                'code' => '094',
                'name' => 'Juan Rodríguez Clara',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            182 => 
            array (
                'id' => 2182,
                'code' => '095',
                'name' => 'Juchique de Ferrer',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            183 => 
            array (
                'id' => 2183,
                'code' => '096',
                'name' => 'Landero y Coss',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            184 => 
            array (
                'id' => 2184,
                'code' => '097',
                'name' => 'Lerdo de Tejada',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            185 => 
            array (
                'id' => 2185,
                'code' => '098',
                'name' => 'Magdalena',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            186 => 
            array (
                'id' => 2186,
                'code' => '099',
                'name' => 'Maltrata',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            187 => 
            array (
                'id' => 2187,
                'code' => '100',
                'name' => 'Manlio Fabio Altamirano',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            188 => 
            array (
                'id' => 2188,
                'code' => '101',
                'name' => 'Mariano Escobedo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            189 => 
            array (
                'id' => 2189,
                'code' => '102',
                'name' => 'Martínez de la Torre',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            190 => 
            array (
                'id' => 2190,
                'code' => '103',
                'name' => 'Mecatlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            191 => 
            array (
                'id' => 2191,
                'code' => '104',
                'name' => 'Mecayapan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            192 => 
            array (
                'id' => 2192,
                'code' => '105',
                'name' => 'Medellín de Bravo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            193 => 
            array (
                'id' => 2193,
                'code' => '106',
                'name' => 'Miahuatlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            194 => 
            array (
                'id' => 2194,
                'code' => '107',
                'name' => 'Las Minas',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            195 => 
            array (
                'id' => 2195,
                'code' => '108',
                'name' => 'Minatitlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            196 => 
            array (
                'id' => 2196,
                'code' => '109',
                'name' => 'Misantla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            197 => 
            array (
                'id' => 2197,
                'code' => '110',
                'name' => 'Mixtla de Altamirano',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            198 => 
            array (
                'id' => 2198,
                'code' => '111',
                'name' => 'Moloacán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            199 => 
            array (
                'id' => 2199,
                'code' => '112',
                'name' => 'Naolinco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            200 => 
            array (
                'id' => 2201,
                'code' => '114',
                'name' => 'Nautla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            201 => 
            array (
                'id' => 2202,
                'code' => '115',
                'name' => 'Nogales',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            202 => 
            array (
                'id' => 2203,
                'code' => '116',
                'name' => 'Oluta',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            203 => 
            array (
                'id' => 2204,
                'code' => '117',
                'name' => 'Omealca',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            204 => 
            array (
                'id' => 2205,
                'code' => '118',
                'name' => 'Orizaba',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            205 => 
            array (
                'id' => 2206,
                'code' => '119',
                'name' => 'Otatitlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            206 => 
            array (
                'id' => 2207,
                'code' => '120',
                'name' => 'Oteapan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            207 => 
            array (
                'id' => 2208,
                'code' => '121',
                'name' => 'Ozuluama de Mascareñas',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            208 => 
            array (
                'id' => 2209,
                'code' => '122',
                'name' => 'Pajapan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            209 => 
            array (
                'id' => 2210,
                'code' => '123',
                'name' => 'Pánuco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            210 => 
            array (
                'id' => 2211,
                'code' => '124',
                'name' => 'Papantla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            211 => 
            array (
                'id' => 2212,
                'code' => '125',
                'name' => 'Paso del Macho',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            212 => 
            array (
                'id' => 2213,
                'code' => '126',
                'name' => 'Paso de Ovejas',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            213 => 
            array (
                'id' => 2214,
                'code' => '127',
                'name' => 'La Perla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            214 => 
            array (
                'id' => 2215,
                'code' => '128',
                'name' => 'Perote',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            215 => 
            array (
                'id' => 2216,
                'code' => '129',
                'name' => 'Platón Sánchez',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            216 => 
            array (
                'id' => 2217,
                'code' => '130',
                'name' => 'Playa Vicente',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            217 => 
            array (
                'id' => 2218,
                'code' => '131',
                'name' => 'Poza Rica de Hidalgo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            218 => 
            array (
                'id' => 2219,
                'code' => '132',
                'name' => 'Las Vigas de Ramírez',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            219 => 
            array (
                'id' => 2220,
                'code' => '133',
                'name' => 'Pueblo Viejo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            220 => 
            array (
                'id' => 2221,
                'code' => '134',
                'name' => 'Puente Nacional',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            221 => 
            array (
                'id' => 2222,
                'code' => '135',
                'name' => 'Rafael Delgado',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            222 => 
            array (
                'id' => 2223,
                'code' => '136',
                'name' => 'Rafael Lucio',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            223 => 
            array (
                'id' => 2224,
                'code' => '137',
                'name' => 'Los Reyes',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            224 => 
            array (
                'id' => 2225,
                'code' => '138',
                'name' => 'Río Blanco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            225 => 
            array (
                'id' => 2226,
                'code' => '139',
                'name' => 'Saltabarranca',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            226 => 
            array (
                'id' => 2227,
                'code' => '140',
                'name' => 'San Andrés Tenejapan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            227 => 
            array (
                'id' => 2228,
                'code' => '141',
                'name' => 'San Andrés Tuxtla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            228 => 
            array (
                'id' => 2229,
                'code' => '142',
                'name' => 'San Juan Evangelista',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            229 => 
            array (
                'id' => 2230,
                'code' => '143',
                'name' => 'Santiago Tuxtla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            230 => 
            array (
                'id' => 2231,
                'code' => '144',
                'name' => 'Sayula de Alemán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            231 => 
            array (
                'id' => 2232,
                'code' => '145',
                'name' => 'Soconusco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            232 => 
            array (
                'id' => 2233,
                'code' => '146',
                'name' => 'Sochiapa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            233 => 
            array (
                'id' => 2234,
                'code' => '147',
                'name' => 'Soledad Atzompa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            234 => 
            array (
                'id' => 2235,
                'code' => '148',
                'name' => 'Soledad de Doblado',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            235 => 
            array (
                'id' => 2236,
                'code' => '149',
                'name' => 'Soteapan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            236 => 
            array (
                'id' => 2237,
                'code' => '150',
                'name' => 'Tamalín',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            237 => 
            array (
                'id' => 2238,
                'code' => '151',
                'name' => 'Tamiahua',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            238 => 
            array (
                'id' => 2239,
                'code' => '152',
                'name' => 'Tampico Alto',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            239 => 
            array (
                'id' => 2240,
                'code' => '153',
                'name' => 'Tancoco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            240 => 
            array (
                'id' => 2241,
                'code' => '154',
                'name' => 'Tantima',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            241 => 
            array (
                'id' => 2242,
                'code' => '155',
                'name' => 'Tantoyuca',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            242 => 
            array (
                'id' => 2243,
                'code' => '156',
                'name' => 'Tatatila',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            243 => 
            array (
                'id' => 2244,
                'code' => '157',
                'name' => 'Castillo de Teayo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            244 => 
            array (
                'id' => 2245,
                'code' => '158',
                'name' => 'Tecolutla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            245 => 
            array (
                'id' => 2246,
                'code' => '159',
                'name' => 'Tehuipango',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            246 => 
            array (
                'id' => 2247,
                'code' => '160',
                'name' => 'Álamo Temapache',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            247 => 
            array (
                'id' => 2248,
                'code' => '161',
                'name' => 'Tempoal',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            248 => 
            array (
                'id' => 2249,
                'code' => '162',
                'name' => 'Tenampa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            249 => 
            array (
                'id' => 2250,
                'code' => '163',
                'name' => 'Tenochtitlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            250 => 
            array (
                'id' => 2251,
                'code' => '164',
                'name' => 'Teocelo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            251 => 
            array (
                'id' => 2252,
                'code' => '165',
                'name' => 'Tepatlaxco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            252 => 
            array (
                'id' => 2253,
                'code' => '166',
                'name' => 'Tepetlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            253 => 
            array (
                'id' => 2254,
                'code' => '167',
                'name' => 'Tepetzintla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            254 => 
            array (
                'id' => 2255,
                'code' => '168',
                'name' => 'Tequila',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            255 => 
            array (
                'id' => 2256,
                'code' => '169',
                'name' => 'José Azueta',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            256 => 
            array (
                'id' => 2257,
                'code' => '170',
                'name' => 'Texcatepec',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            257 => 
            array (
                'id' => 2258,
                'code' => '171',
                'name' => 'Texhuacán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            258 => 
            array (
                'id' => 2259,
                'code' => '172',
                'name' => 'Texistepec',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            259 => 
            array (
                'id' => 2260,
                'code' => '173',
                'name' => 'Tezonapa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            260 => 
            array (
                'id' => 2261,
                'code' => '174',
                'name' => 'Tierra Blanca',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            261 => 
            array (
                'id' => 2262,
                'code' => '175',
                'name' => 'Tihuatlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            262 => 
            array (
                'id' => 2263,
                'code' => '176',
                'name' => 'Tlacojalpan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            263 => 
            array (
                'id' => 2264,
                'code' => '177',
                'name' => 'Tlacolulan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            264 => 
            array (
                'id' => 2265,
                'code' => '178',
                'name' => 'Tlacotalpan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            265 => 
            array (
                'id' => 2266,
                'code' => '179',
                'name' => 'Tlacotepec de Mejía',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            266 => 
            array (
                'id' => 2267,
                'code' => '180',
                'name' => 'Tlachichilco',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            267 => 
            array (
                'id' => 2268,
                'code' => '181',
                'name' => 'Tlalixcoyan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            268 => 
            array (
                'id' => 2269,
                'code' => '182',
                'name' => 'Tlalnelhuayocan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            269 => 
            array (
                'id' => 2270,
                'code' => '183',
                'name' => 'Tlapacoyan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            270 => 
            array (
                'id' => 2271,
                'code' => '184',
                'name' => 'Tlaquilpa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            271 => 
            array (
                'id' => 2272,
                'code' => '185',
                'name' => 'Tlilapan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            272 => 
            array (
                'id' => 2273,
                'code' => '186',
                'name' => 'Tomatlán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            273 => 
            array (
                'id' => 2274,
                'code' => '187',
                'name' => 'Tonayán',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            274 => 
            array (
                'id' => 2275,
                'code' => '188',
                'name' => 'Totutla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            275 => 
            array (
                'id' => 2276,
                'code' => '189',
                'name' => 'Tuxpan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            276 => 
            array (
                'id' => 2277,
                'code' => '190',
                'name' => 'Tuxtilla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            277 => 
            array (
                'id' => 2278,
                'code' => '191',
                'name' => 'Ursulo Galván',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            278 => 
            array (
                'id' => 2279,
                'code' => '192',
                'name' => 'Vega de Alatorre',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            279 => 
            array (
                'id' => 2280,
                'code' => '193',
                'name' => 'Veracruz',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            280 => 
            array (
                'id' => 2281,
                'code' => '194',
                'name' => 'Villa Aldama',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            281 => 
            array (
                'id' => 2282,
                'code' => '195',
                'name' => 'Xoxocotla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            282 => 
            array (
                'id' => 2283,
                'code' => '196',
                'name' => 'Yanga',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            283 => 
            array (
                'id' => 2284,
                'code' => '197',
                'name' => 'Yecuatla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            284 => 
            array (
                'id' => 2285,
                'code' => '198',
                'name' => 'Zacualpan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            285 => 
            array (
                'id' => 2286,
                'code' => '199',
                'name' => 'Zaragoza',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            286 => 
            array (
                'id' => 2287,
                'code' => '200',
                'name' => 'Zentla',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            287 => 
            array (
                'id' => 2288,
                'code' => '201',
                'name' => 'Zongolica',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            288 => 
            array (
                'id' => 2289,
                'code' => '202',
                'name' => 'Zontecomatlán de López y Fuentes',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            289 => 
            array (
                'id' => 2290,
                'code' => '203',
                'name' => 'Zozocolco de Hidalgo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            290 => 
            array (
                'id' => 2291,
                'code' => '204',
                'name' => 'Agua Dulce',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            291 => 
            array (
                'id' => 2292,
                'code' => '205',
                'name' => 'El Higo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            292 => 
            array (
                'id' => 2293,
                'code' => '206',
                'name' => 'Nanchital de Lázaro Cárdenas del Río',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            293 => 
            array (
                'id' => 2294,
                'code' => '207',
                'name' => 'Tres Valles',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            294 => 
            array (
                'id' => 2295,
                'code' => '208',
                'name' => 'Carlos A. Carrillo',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            295 => 
            array (
                'id' => 2296,
                'code' => '209',
                'name' => 'Tatahuicapan de Juárez',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            296 => 
            array (
                'id' => 2297,
                'code' => '210',
                'name' => 'Uxpanapa',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            297 => 
            array (
                'id' => 2298,
                'code' => '211',
                'name' => 'San Rafael',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            298 => 
            array (
                'id' => 2299,
                'code' => '212',
                'name' => 'Santiago Sochiapan',
                'state_id' => 30,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            299 => 
            array (
                'id' => 2300,
                'code' => '001',
                'name' => 'Abalá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            300 => 
            array (
                'id' => 2301,
                'code' => '002',
                'name' => 'Acanceh',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            301 => 
            array (
                'id' => 2302,
                'code' => '003',
                'name' => 'Akil',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            302 => 
            array (
                'id' => 2303,
                'code' => '004',
                'name' => 'Baca',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            303 => 
            array (
                'id' => 2304,
                'code' => '005',
                'name' => 'Bokobá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            304 => 
            array (
                'id' => 2305,
                'code' => '006',
                'name' => 'Buctzotz',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            305 => 
            array (
                'id' => 2306,
                'code' => '007',
                'name' => 'Cacalchén',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            306 => 
            array (
                'id' => 2307,
                'code' => '008',
                'name' => 'Calotmul',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            307 => 
            array (
                'id' => 2308,
                'code' => '009',
                'name' => 'Cansahcab',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            308 => 
            array (
                'id' => 2309,
                'code' => '010',
                'name' => 'Cantamayec',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            309 => 
            array (
                'id' => 2310,
                'code' => '011',
                'name' => 'Celestún',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            310 => 
            array (
                'id' => 2311,
                'code' => '012',
                'name' => 'Cenotillo',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            311 => 
            array (
                'id' => 2312,
                'code' => '013',
                'name' => 'Conkal',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            312 => 
            array (
                'id' => 2313,
                'code' => '014',
                'name' => 'Cuncunul',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            313 => 
            array (
                'id' => 2314,
                'code' => '015',
                'name' => 'Cuzamá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            314 => 
            array (
                'id' => 2315,
                'code' => '016',
                'name' => 'Chacsinkín',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            315 => 
            array (
                'id' => 2316,
                'code' => '017',
                'name' => 'Chankom',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            316 => 
            array (
                'id' => 2317,
                'code' => '018',
                'name' => 'Chapab',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            317 => 
            array (
                'id' => 2318,
                'code' => '019',
                'name' => 'Chemax',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            318 => 
            array (
                'id' => 2319,
                'code' => '020',
                'name' => 'Chicxulub Pueblo',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            319 => 
            array (
                'id' => 2320,
                'code' => '021',
                'name' => 'Chichimilá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            320 => 
            array (
                'id' => 2321,
                'code' => '022',
                'name' => 'Chikindzonot',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            321 => 
            array (
                'id' => 2322,
                'code' => '023',
                'name' => 'Chocholá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            322 => 
            array (
                'id' => 2323,
                'code' => '024',
                'name' => 'Chumayel',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            323 => 
            array (
                'id' => 2324,
                'code' => '025',
                'name' => 'Dzán',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            324 => 
            array (
                'id' => 2325,
                'code' => '026',
                'name' => 'Dzemul',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            325 => 
            array (
                'id' => 2326,
                'code' => '027',
                'name' => 'Dzidzantún',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            326 => 
            array (
                'id' => 2327,
                'code' => '028',
                'name' => 'Dzilam de Bravo',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            327 => 
            array (
                'id' => 2328,
                'code' => '029',
                'name' => 'Dzilam González',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            328 => 
            array (
                'id' => 2329,
                'code' => '030',
                'name' => 'Dzitás',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            329 => 
            array (
                'id' => 2330,
                'code' => '031',
                'name' => 'Dzoncauich',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            330 => 
            array (
                'id' => 2331,
                'code' => '032',
                'name' => 'Espita',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            331 => 
            array (
                'id' => 2332,
                'code' => '033',
                'name' => 'Halachó',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            332 => 
            array (
                'id' => 2333,
                'code' => '034',
                'name' => 'Hocabá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            333 => 
            array (
                'id' => 2334,
                'code' => '035',
                'name' => 'Hoctún',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            334 => 
            array (
                'id' => 2335,
                'code' => '036',
                'name' => 'Homún',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            335 => 
            array (
                'id' => 2336,
                'code' => '037',
                'name' => 'Huhí',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            336 => 
            array (
                'id' => 2337,
                'code' => '038',
                'name' => 'Hunucmá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            337 => 
            array (
                'id' => 2338,
                'code' => '039',
                'name' => 'Ixil',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            338 => 
            array (
                'id' => 2339,
                'code' => '040',
                'name' => 'Izamal',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            339 => 
            array (
                'id' => 2340,
                'code' => '041',
                'name' => 'Kanasín',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            340 => 
            array (
                'id' => 2341,
                'code' => '042',
                'name' => 'Kantunil',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            341 => 
            array (
                'id' => 2342,
                'code' => '043',
                'name' => 'Kaua',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            342 => 
            array (
                'id' => 2343,
                'code' => '044',
                'name' => 'Kinchil',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            343 => 
            array (
                'id' => 2344,
                'code' => '045',
                'name' => 'Kopomá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            344 => 
            array (
                'id' => 2345,
                'code' => '046',
                'name' => 'Mama',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            345 => 
            array (
                'id' => 2346,
                'code' => '047',
                'name' => 'Maní',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            346 => 
            array (
                'id' => 2347,
                'code' => '048',
                'name' => 'Maxcanú',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            347 => 
            array (
                'id' => 2348,
                'code' => '049',
                'name' => 'Mayapán',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            348 => 
            array (
                'id' => 2349,
                'code' => '050',
                'name' => 'Mérida',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            349 => 
            array (
                'id' => 2350,
                'code' => '051',
                'name' => 'Mocochá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            350 => 
            array (
                'id' => 2351,
                'code' => '052',
                'name' => 'Motul',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            351 => 
            array (
                'id' => 2352,
                'code' => '053',
                'name' => 'Muna',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            352 => 
            array (
                'id' => 2353,
                'code' => '054',
                'name' => 'Muxupip',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            353 => 
            array (
                'id' => 2354,
                'code' => '055',
                'name' => 'Opichén',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            354 => 
            array (
                'id' => 2355,
                'code' => '056',
                'name' => 'Oxkutzcab',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            355 => 
            array (
                'id' => 2356,
                'code' => '057',
                'name' => 'Panabá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            356 => 
            array (
                'id' => 2357,
                'code' => '058',
                'name' => 'Peto',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            357 => 
            array (
                'id' => 2358,
                'code' => '059',
                'name' => 'Progreso',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            358 => 
            array (
                'id' => 2359,
                'code' => '060',
                'name' => 'Quintana Roo',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            359 => 
            array (
                'id' => 2360,
                'code' => '061',
                'name' => 'Río Lagartos',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            360 => 
            array (
                'id' => 2361,
                'code' => '062',
                'name' => 'Sacalum',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            361 => 
            array (
                'id' => 2362,
                'code' => '063',
                'name' => 'Samahil',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            362 => 
            array (
                'id' => 2363,
                'code' => '064',
                'name' => 'Sanahcat',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            363 => 
            array (
                'id' => 2364,
                'code' => '065',
                'name' => 'San Felipe',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            364 => 
            array (
                'id' => 2365,
                'code' => '066',
                'name' => 'Santa Elena',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            365 => 
            array (
                'id' => 2366,
                'code' => '067',
                'name' => 'Seyé',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            366 => 
            array (
                'id' => 2367,
                'code' => '068',
                'name' => 'Sinanché',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            367 => 
            array (
                'id' => 2368,
                'code' => '069',
                'name' => 'Sotuta',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            368 => 
            array (
                'id' => 2369,
                'code' => '070',
                'name' => 'Sucilá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            369 => 
            array (
                'id' => 2370,
                'code' => '071',
                'name' => 'Sudzal',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            370 => 
            array (
                'id' => 2371,
                'code' => '072',
                'name' => 'Suma',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            371 => 
            array (
                'id' => 2372,
                'code' => '073',
                'name' => 'Tahdziú',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            372 => 
            array (
                'id' => 2373,
                'code' => '074',
                'name' => 'Tahmek',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            373 => 
            array (
                'id' => 2374,
                'code' => '075',
                'name' => 'Teabo',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            374 => 
            array (
                'id' => 2375,
                'code' => '076',
                'name' => 'Tecoh',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            375 => 
            array (
                'id' => 2376,
                'code' => '077',
                'name' => 'Tekal de Venegas',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            376 => 
            array (
                'id' => 2377,
                'code' => '078',
                'name' => 'Tekantó',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            377 => 
            array (
                'id' => 2378,
                'code' => '079',
                'name' => 'Tekax',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            378 => 
            array (
                'id' => 2379,
                'code' => '080',
                'name' => 'Tekit',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            379 => 
            array (
                'id' => 2380,
                'code' => '081',
                'name' => 'Tekom',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            380 => 
            array (
                'id' => 2381,
                'code' => '082',
                'name' => 'Telchac Pueblo',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            381 => 
            array (
                'id' => 2382,
                'code' => '083',
                'name' => 'Telchac Puerto',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            382 => 
            array (
                'id' => 2383,
                'code' => '084',
                'name' => 'Temax',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            383 => 
            array (
                'id' => 2384,
                'code' => '085',
                'name' => 'Temozón',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            384 => 
            array (
                'id' => 2385,
                'code' => '086',
                'name' => 'Tepakán',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            385 => 
            array (
                'id' => 2386,
                'code' => '087',
                'name' => 'Tetiz',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            386 => 
            array (
                'id' => 2387,
                'code' => '088',
                'name' => 'Teya',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            387 => 
            array (
                'id' => 2388,
                'code' => '089',
                'name' => 'Ticul',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            388 => 
            array (
                'id' => 2389,
                'code' => '090',
                'name' => 'Timucuy',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            389 => 
            array (
                'id' => 2390,
                'code' => '091',
                'name' => 'Tinum',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            390 => 
            array (
                'id' => 2391,
                'code' => '092',
                'name' => 'Tixcacalcupul',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            391 => 
            array (
                'id' => 2392,
                'code' => '093',
                'name' => 'Tixkokob',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            392 => 
            array (
                'id' => 2393,
                'code' => '094',
                'name' => 'Tixmehuac',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            393 => 
            array (
                'id' => 2394,
                'code' => '095',
                'name' => 'Tixpéhual',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            394 => 
            array (
                'id' => 2395,
                'code' => '096',
                'name' => 'Tizimín',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            395 => 
            array (
                'id' => 2396,
                'code' => '097',
                'name' => 'Tunkás',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            396 => 
            array (
                'id' => 2397,
                'code' => '098',
                'name' => 'Tzucacab',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            397 => 
            array (
                'id' => 2398,
                'code' => '099',
                'name' => 'Uayma',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            398 => 
            array (
                'id' => 2399,
                'code' => '100',
                'name' => 'Ucú',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            399 => 
            array (
                'id' => 2400,
                'code' => '101',
                'name' => 'Umán',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            400 => 
            array (
                'id' => 2401,
                'code' => '102',
                'name' => 'Valladolid',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            401 => 
            array (
                'id' => 2402,
                'code' => '103',
                'name' => 'Xocchel',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            402 => 
            array (
                'id' => 2403,
                'code' => '104',
                'name' => 'Yaxcabá',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            403 => 
            array (
                'id' => 2404,
                'code' => '105',
                'name' => 'Yaxkukul',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            404 => 
            array (
                'id' => 2405,
                'code' => '106',
                'name' => 'Yobaín',
                'state_id' => 31,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            405 => 
            array (
                'id' => 2406,
                'code' => '001',
                'name' => 'Apozol',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            406 => 
            array (
                'id' => 2407,
                'code' => '002',
                'name' => 'Apulco',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            407 => 
            array (
                'id' => 2408,
                'code' => '003',
                'name' => 'Atolinga',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            408 => 
            array (
                'id' => 2409,
                'code' => '004',
                'name' => 'Benito Juárez',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            409 => 
            array (
                'id' => 2410,
                'code' => '005',
                'name' => 'Calera',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            410 => 
            array (
                'id' => 2411,
                'code' => '006',
                'name' => 'Cañitas de Felipe Pescador',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            411 => 
            array (
                'id' => 2412,
                'code' => '007',
                'name' => 'Concepción del Oro',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            412 => 
            array (
                'id' => 2413,
                'code' => '008',
                'name' => 'Cuauhtémoc',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            413 => 
            array (
                'id' => 2414,
                'code' => '009',
                'name' => 'Chalchihuites',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            414 => 
            array (
                'id' => 2415,
                'code' => '010',
                'name' => 'Fresnillo',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            415 => 
            array (
                'id' => 2416,
                'code' => '011',
                'name' => 'Trinidad García de la Cadena',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            416 => 
            array (
                'id' => 2417,
                'code' => '012',
                'name' => 'Genaro Codina',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            417 => 
            array (
                'id' => 2418,
                'code' => '013',
                'name' => 'General Enrique Estrada',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            418 => 
            array (
                'id' => 2419,
                'code' => '014',
                'name' => 'General Francisco R. Murguía',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            419 => 
            array (
                'id' => 2420,
                'code' => '015',
                'name' => 'El Plateado de Joaquín Amaro',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            420 => 
            array (
                'id' => 2421,
                'code' => '016',
                'name' => 'General Pánfilo Natera',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            421 => 
            array (
                'id' => 2422,
                'code' => '017',
                'name' => 'Guadalupe',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            422 => 
            array (
                'id' => 2423,
                'code' => '018',
                'name' => 'Huanusco',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            423 => 
            array (
                'id' => 2424,
                'code' => '019',
                'name' => 'Jalpa',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            424 => 
            array (
                'id' => 2425,
                'code' => '020',
                'name' => 'Jerez',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            425 => 
            array (
                'id' => 2426,
                'code' => '021',
                'name' => 'Jiménez del Teul',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            426 => 
            array (
                'id' => 2427,
                'code' => '022',
                'name' => 'Juan Aldama',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            427 => 
            array (
                'id' => 2428,
                'code' => '023',
                'name' => 'Juchipila',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            428 => 
            array (
                'id' => 2429,
                'code' => '024',
                'name' => 'Loreto',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            429 => 
            array (
                'id' => 2430,
                'code' => '025',
                'name' => 'Luis Moya',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            430 => 
            array (
                'id' => 2431,
                'code' => '026',
                'name' => 'Mazapil',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            431 => 
            array (
                'id' => 2432,
                'code' => '027',
                'name' => 'Melchor Ocampo',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            432 => 
            array (
                'id' => 2433,
                'code' => '028',
                'name' => 'Mezquital del Oro',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            433 => 
            array (
                'id' => 2434,
                'code' => '029',
                'name' => 'Miguel Auza',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            434 => 
            array (
                'id' => 2435,
                'code' => '030',
                'name' => 'Momax',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            435 => 
            array (
                'id' => 2436,
                'code' => '031',
                'name' => 'Monte Escobedo',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            436 => 
            array (
                'id' => 2437,
                'code' => '032',
                'name' => 'Morelos',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            437 => 
            array (
                'id' => 2438,
                'code' => '033',
                'name' => 'Moyahua de Estrada',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            438 => 
            array (
                'id' => 2439,
                'code' => '034',
                'name' => 'Nochistlán de Mejía',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            439 => 
            array (
                'id' => 2440,
                'code' => '035',
                'name' => 'Noria de Ángeles',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            440 => 
            array (
                'id' => 2441,
                'code' => '036',
                'name' => 'Ojocaliente',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            441 => 
            array (
                'id' => 2442,
                'code' => '037',
                'name' => 'Pánuco',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            442 => 
            array (
                'id' => 2443,
                'code' => '038',
                'name' => 'Pinos',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            443 => 
            array (
                'id' => 2444,
                'code' => '039',
                'name' => 'Río Grande',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            444 => 
            array (
                'id' => 2445,
                'code' => '040',
                'name' => 'Sain Alto',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            445 => 
            array (
                'id' => 2446,
                'code' => '041',
                'name' => 'El Salvador',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            446 => 
            array (
                'id' => 2447,
                'code' => '042',
                'name' => 'Sombrerete',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            447 => 
            array (
                'id' => 2448,
                'code' => '043',
                'name' => 'Susticacán',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            448 => 
            array (
                'id' => 2449,
                'code' => '044',
                'name' => 'Tabasco',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            449 => 
            array (
                'id' => 2450,
                'code' => '045',
                'name' => 'Tepechitlán',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            450 => 
            array (
                'id' => 2451,
                'code' => '046',
                'name' => 'Tepetongo',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            451 => 
            array (
                'id' => 2452,
                'code' => '047',
                'name' => 'Teúl de González Ortega',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            452 => 
            array (
                'id' => 2453,
                'code' => '048',
                'name' => 'Tlaltenango de Sánchez Román',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            453 => 
            array (
                'id' => 2454,
                'code' => '049',
                'name' => 'Valparaíso',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            454 => 
            array (
                'id' => 2455,
                'code' => '050',
                'name' => 'Vetagrande',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            455 => 
            array (
                'id' => 2456,
                'code' => '051',
                'name' => 'Villa de Cos',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            456 => 
            array (
                'id' => 2457,
                'code' => '052',
                'name' => 'Villa García',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            457 => 
            array (
                'id' => 2458,
                'code' => '053',
                'name' => 'Villa González Ortega',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            458 => 
            array (
                'id' => 2459,
                'code' => '054',
                'name' => 'Villa Hidalgo',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            459 => 
            array (
                'id' => 2460,
                'code' => '055',
                'name' => 'Villanueva',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            460 => 
            array (
                'id' => 2461,
                'code' => '056',
                'name' => 'Zacatecas',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            461 => 
            array (
                'id' => 2462,
                'code' => '057',
                'name' => 'Trancoso',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            462 => 
            array (
                'id' => 2463,
                'code' => '058',
                'name' => 'Santa María de la Paz',
                'state_id' => 32,
                'inactive' => false,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}