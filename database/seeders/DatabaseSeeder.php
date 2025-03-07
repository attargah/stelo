<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->superAdmin()->create([
            'name' => 'Admin',
            'email' => 'admin@stelo.com',
            'password' => Hash::make('admin1234'),
            'remember_token' => Str::random(10),
        ]);

        Artisan::call('permissions:sync');

        User::factory()->user()->create([
            'name' => 'User',
            'email' => 'user@stelo.com',
            'password' => Hash::make('user1234'),
            'remember_token' => Str::random(10),
        ]);

        $this->call([
            ProductSeeder::class,
        ]);
    }
}
