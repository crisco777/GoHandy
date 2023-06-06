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
            'Fontaneria',
            'Sastreria',
            'Carpinteria',
            'Electricista',
            'Soldadura',
            'Cerrajeria',
            'Albañileria',
            'Vidrieria',
            'Servicio de pintura',
            'Mecánico',
            'Reparacion de electronicos',
            'Limpieza domestica',
            'Jardineria',
            'Cocina',
            'Mantenimiento',
            'Conductor',
        ];

        Service::factory(count($services))->sequence(fn($sqn) => [
            'type' => $services[$sqn->index]
        ])->create();
    }
}
