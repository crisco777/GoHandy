<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $services = Service::all()->pluck('id');
        $clients = User::whereRelation('role', 'type', 'Client')->get()->pluck('id');
        $workers = User::whereRelation('role', 'type', 'Worker')->get()->pluck('id');

        return [
            'client_id'=>$clients->random(),
            'worker_id'=>$workers->random(),
            'service_id'=>$services->random(),
        ];
    }
}
