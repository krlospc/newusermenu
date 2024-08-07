<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\UsrsRoles;
use App\Models\UsrsPermisos;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsrsRolesPermisos>
 */
class UsrsRolesPermisosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'usrs_roles_id' => UsrsRoles::all()->random()->id,
            'usrs_permisos_id' => UsrsPermisos::all()->random()->id,
        ];
    }
}
