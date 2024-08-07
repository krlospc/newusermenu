<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UsrsRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('usrs_roles')->insert([
            ['codigo'=>'fin', 'rol'=>'FINANZAS'],
            ['codigo'=>'rrhh_etc', 'rol'=>'RRHH'],
            ['codigo'=>'inv_etc', 'rol'=>'INVERSION']
        ]);
    }
}
