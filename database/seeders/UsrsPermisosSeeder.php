<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsrsPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usrs_permisos')->insert([
            ['codigo'=>'fin', 'permiso'=>'submenu 1','ruta'=>'users-main', 'padre_id' => ' ', 'permiso_tipo'=>'menu'],
            ['codigo'=>'rrhh_etc', 'permiso'=>'submenu 2','ruta'=>'users-main', 'padre_id' => ' ', 'permiso_tipo'=>'menu'],
            ['codigo'=>'inv_etc', 'permiso'=>'submenu 3','ruta'=>'users-main', 'padre_id' => ' ', 'permiso_tipo'=>'menu'],
        ]);
    }
}
