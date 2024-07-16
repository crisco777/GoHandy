<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            'Plumbing',
            'Carpenter',
            'Electricist',
            'Masonry',
            'Painting Service',
            'Gardening',

        ];

        Service::factory(count($services))->sequence(fn($sqn) => [
            'type' => $services[$sqn->index]
        ])->create();
    }
}
