<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $works = Work::all()->pluck('id');

        return [
            'work_id'=> $works->random(),
            'stars'=>fake()->numberBetween(1, 5),
            'comment'=>fake()->text(255),
            'anonym'=>fake()->boolean(),
        ];
    }
}
