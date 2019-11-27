<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Superadmin',
                'slug' => 'superadmin',
                'description' => 'Todos los permisos',
                'created_at' => '2019-11-24 20:40:30',
                'updated_at' => '2019-11-25 10:39:50',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Administrador locatel',
                'slug' => 'administrador-locatel',
                'description' => 'Administrador locatel',
                'created_at' => '2019-11-25 16:25:43',
                'updated_at' => '2019-11-25 16:25:43',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Supervisor locatel',
                'slug' => 'supervisor-locatel',
                'description' => 'Supervisor locatel',
                'created_at' => '2019-11-25 16:26:30',
                'updated_at' => '2019-11-25 16:26:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Operador locatel',
                'slug' => 'operador-locatel',
                'description' => 'Operador locatel',
                'created_at' => '2019-11-25 16:28:06',
                'updated_at' => '2019-11-25 16:28:06',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Administrador dependencia',
                'slug' => 'administrador-dependencia',
                'description' => 'Administrador dependencia',
                'created_at' => '2019-11-25 16:29:05',
                'updated_at' => '2019-11-25 16:29:05',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Alimentador dependencia',
                'slug' => 'alimentador-dependencia',
                'description' => 'Alimentador dependencia',
                'created_at' => '2019-11-25 16:29:34',
                'updated_at' => '2019-11-25 16:29:34',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Usuario',
                'slug' => 'usuario',
                'description' => '...',
                'created_at' => '2019-11-26 20:32:58',
                'updated_at' => '2019-11-26 20:32:58',
            ),
        ));
        
        
    }
}