<?php

namespace Database\Seeders;

use App\Models\Sex;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sex::create([
            'type'=> 'Male'

        ]);
        Sex::create([
            'type'=> 'Female'

        ]);
    }
}
