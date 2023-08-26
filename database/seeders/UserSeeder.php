<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'email' => 'example@example.com'
        ]);

        User::factory(25)->create([
            'role_id' => 2
        ]);

        $services = Service::all();
        User::factory(50)->create([
            'role_id' => 1
        ])->each(function ($user) use ($services) {
            if ($user->role_id == 1) {
                $user->services()->attach($services->random(rand(1, 3)), [
                    'price' => rand(5, 25)
                ]);
            }
        });
    }
}
