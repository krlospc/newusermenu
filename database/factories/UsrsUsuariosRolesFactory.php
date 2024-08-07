<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


use App\Models\User;
use App\Models\UsrsRoles;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsrsUsuariosRoles>
 */
class UsrsUsuariosRolesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'usrs_roles_id' => UsrsRoles::all()->random()->id
        ];
    }
}
