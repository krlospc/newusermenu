<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UsrsPersonas;
use App\Models\UsrsRolesPermisos;
use App\Models\UsrsUsuariosRoles;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        UsrsPersonas::factory(5)->create();
        User::factory(3)->create();
        $this->call(UsrsRolesTableSeeder::class);
        $this->call(UsrsPermisosSeeder::class);
        UsrsRolesPermisos::factory(5)->create();
        UsrsUsuariosRoles::factory(5)->create();

    }
}
