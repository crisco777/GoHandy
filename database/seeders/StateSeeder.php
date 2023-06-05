<?php

namespace Database\Seeders;

use App\Models\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::create([
            'type'=> 'Ahuachapan'

        ]);
        State::create([
            'type'=> 'La Libertad'

        ]);
        State::create([
            'type'=> 'Santa Ana'

        ]);
        State::create([
            'type'=> 'San Salvador'

        ]);
        State::create([
            'type'=> 'La Union'

        ]);
        State::create([
            'type'=> 'Sonsonate'

        ]);
        State::create([
            'type'=> 'Morazan'

        ]);
        State::create([
            'type'=> 'San MIguel'

        ]);
        State::create([
            'type'=> 'Cabañas'

        ]);
        State::create([
            'type'=> 'Chalatenango'

        ]);
        State::create([
            'type'=> 'Usulatan'

        ]);
        State::create([
            'type'=> 'Cuscatlan'

        ]);
        State::create([
            'type'=> 'San Vicente'

        ]);
        State::create([
            'type'=> 'La Paz'

        ]);
    }
}
