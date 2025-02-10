<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function superAdmin()
    {
        return $this->afterCreating(function (User $user) {

            $role = Role::firstOrCreate(['name' => 'Super Admin']);
            $user->assignRole($role);
        });
    }
    public function user(){
        return $this->afterCreating(function (User $user){
            $role = Role::firstOrCreate(['name' => 'User', 'guard_name' => 'web']);
            $permissions = [
                ['permission_id' => 5, 'role_id' => 2],
                ['permission_id' => 29, 'role_id' => 2],
                ['permission_id' => 53, 'role_id' => 2],
                ['permission_id' => 77, 'role_id' => 2],
                ['permission_id' => 101, 'role_id' => 2],
                ['permission_id' => 125, 'role_id' => 2],
                ['permission_id' => 149, 'role_id' => 2],
                ['permission_id' => 173, 'role_id' => 2],
                ['permission_id' => 9, 'role_id' => 2],
                ['permission_id' => 33, 'role_id' => 2],
                ['permission_id' => 57, 'role_id' => 2],
                ['permission_id' => 81, 'role_id' => 2],
                ['permission_id' => 105, 'role_id' => 2],
                ['permission_id' => 129, 'role_id' => 2],
                ['permission_id' => 153, 'role_id' => 2],
                ['permission_id' => 177, 'role_id' => 2],
                ['permission_id' => 11, 'role_id' => 2],
                ['permission_id' => 35, 'role_id' => 2],
                ['permission_id' => 59, 'role_id' => 2],
                ['permission_id' => 83, 'role_id' => 2],
                ['permission_id' => 107, 'role_id' => 2],
                ['permission_id' => 131, 'role_id' => 2],
                ['permission_id' => 155, 'role_id' => 2],
                ['permission_id' => 179, 'role_id' => 2],
                ['permission_id' => 21, 'role_id' => 2],
                ['permission_id' => 45, 'role_id' => 2],
                ['permission_id' => 69, 'role_id' => 2],
                ['permission_id' => 93, 'role_id' => 2],
                ['permission_id' => 117, 'role_id' => 2],
                ['permission_id' => 141, 'role_id' => 2],
                ['permission_id' => 165, 'role_id' => 2],
                ['permission_id' => 189, 'role_id' => 2],
                ['permission_id' => 23, 'role_id' => 2],
                ['permission_id' => 47, 'role_id' => 2],
                ['permission_id' => 71, 'role_id' => 2],
                ['permission_id' => 95, 'role_id' => 2],
                ['permission_id' => 119, 'role_id' => 2],
                ['permission_id' => 167, 'role_id' => 2],
                ['permission_id' => 191, 'role_id' => 2],
                ['permission_id' => 143, 'role_id' => 2],
                ['permission_id' => 19, 'role_id' => 2],
                ['permission_id' => 43, 'role_id' => 2],
                ['permission_id' => 67, 'role_id' => 2],
                ['permission_id' => 91, 'role_id' => 2],
                ['permission_id' => 3, 'role_id' => 2],
                ['permission_id' => 27, 'role_id' => 2],
                ['permission_id' => 51, 'role_id' => 2],
                ['permission_id' => 75, 'role_id' => 2],
                ['permission_id' => 99, 'role_id' => 2],
                ['permission_id' => 123, 'role_id' => 2],
                ['permission_id' => 147, 'role_id' => 2],
                ['permission_id' => 171, 'role_id' => 2],
                ['permission_id' => 1, 'role_id' => 2],
                ['permission_id' => 49, 'role_id' => 2],
                ['permission_id' => 25, 'role_id' => 2],
                ['permission_id' => 73, 'role_id' => 2],
                ['permission_id' => 97, 'role_id' => 2],
                ['permission_id' => 121, 'role_id' => 2],
                ['permission_id' => 145, 'role_id' => 2],
                ['permission_id' => 169, 'role_id' => 2],
                ['permission_id' => 7, 'role_id' => 2],
                ['permission_id' => 31, 'role_id' => 2],
                ['permission_id' => 55, 'role_id' => 2],
                ['permission_id' => 79, 'role_id' => 2],
                ['permission_id' => 103, 'role_id' => 2],
                ['permission_id' => 127, 'role_id' => 2],
                ['permission_id' => 151, 'role_id' => 2],
                ['permission_id' => 175, 'role_id' => 2],
            ];

            DB::table('role_has_permissions')->insert($permissions);
            $user->assignRole($role);
        });
    }


}
