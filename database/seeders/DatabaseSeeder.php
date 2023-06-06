<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            ServiceSeeder::class,
            SexSeeder::class,
            StateTownSeeder::class,
            UserSeeder::class,
            WorkSeeder::class,
            EvaluationSeeder::class,
        ]);
    }
}
