<?php

namespace Database\Seeders;

use App\Models\State;
use App\Models\Town;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateTownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statesTowns = [
            [
                'name' => 'Ahuachapan',
                'towns' => [
                    'Ahuchapán',
                    'Apaneca',
                    'Atiquizaya',
                    'Concepción de Ataco',
                    'El Refugio',
                    'Guaymango',
                    'Jujutla',
                    'San Francisco Menéndez',
                    'San Lorenzo',
                    'San Pedro Puxtla',
                    'Tacuba',
                    'Turin'
                ]
            ],
            [
                'name' => 'Cabañas',
                'towns' => [
                    'Cinquera',
                    'Dolores',
                    'Guacotecti',
                    'Ilobasco',
                    'Jutiapa',
                    'San Isidro',
                    'Sensuntepeque',
                    'Tejutepeque',
                    'Victoria'
                ],
            ],
            [
                'name' => 'Chalatenango',
                'towns' => [
                    'Agua Caliente',
                    'Arcatao',
                    'Azacualpa',
                    'Chalatenango',
                    'Comalapa',
                    'Citalá',
                    'Concepción Quezaltepeque',
                    'Dulce Nombre de María',
                    'El Carrizal',
                    'El Paraíso',
                    'La Laguna',
                    'La Palma',
                    'La Reina',
                    'Las Vueltas',
                    'Nueva Concepción',
                    'Nueva Trinidad',
                    'Nombre de Jesús',
                    'Ojos de Agua',
                    'Potonico',
                    'San Antonio de la Cruz',
                    'San Antonio Los Ranchos',
                    'San Fernando',
                    'San Francisco Lempa',
                    'San Francisco Morazán',
                    'San Ignacio',
                    'San Isidro Labrador',
                    'San José Cancasque',
                    'San José Las Flores',
                    'San Luis del Carmen',
                    'San Miguel de Mercedes',
                    'San Rafael',
                    'Santa Rita',
                    'Tejutla'
                ],
            ],
            [
                'name' => 'Cuscatlan',
                'towns' => [
                    'Candelaria',
                    'Cojutepeque',
                    'El Carmen',
                    'El Rosario',
                    'Monte San Juan',
                    'Oratorio de Concepción',
                    'San Bartolomé Perulapía',
                    'San Cristóbal',
                    'San José Guayabal',
                    'San Pedro Perulapán',
                    'San Rafael Cedros',
                    'San Ramón',
                    'Santa Cruz Analquito',
                    'Santa Cruz Michapa',
                    'Suchitoto',
                    'Tenancingo'
                ],
            ],
            [
                'name' => 'La Libertad',
                'towns' => [
                    'Antiguo Cuscatlán',
                    'Chiltiupán',
                    'Ciudad Arce',
                    'Colón',
                    'Comasagua',
                    'Huizúcar',
                    'Jayaque',
                    'Jicalapa',
                    'La Libertad',
                    'Santa Tecla',
                    'Nuevo Cuscatlán',
                    'San Juan Opico',
                    'Quezaltepeque',
                    'Sacacoyo',
                    'San José Villanueva',
                    'San Matías',
                    'San Pablo Tacachico',
                    'Talnique',
                    'Tamanique',
                    'Teotepeque',
                    'Tepecoyo',
                    'Zaragoza'
                ],
            ],
            [
                'name' => 'La Paz',
                'towns' => [
                    'Cuyultitán',
                    'El Rosario',
                    'Jerusalén',
                    'Mercedes La Ceiba',
                    'Olocuilta',
                    'Paraíso de Osorio',
                    'San Antonio Masahuat',
                    'San Emigdio',
                    'San Francisco Chinameca',
                    'San Juan Nonualco',
                    'San Juan Talpa',
                    'San Juan Tepezontes',
                    'San Luis Talpa',
                    'San Luis La Herradura',
                    'San Miguel Tepezontes',
                    'San Pedro Masahuat',
                    'San Pedro Nonualco',
                    'San Rafael Obrajuelo',
                    'Santa María Ostuma',
                    'Santiago Nonualco',
                    'Tapalhuaca',
                    'Zacatecoluca'
                ],
            ],
            [
                'name' => 'La Unión',
                'towns' => [
                    'Anamorós',
                    'Bolívar',
                    'Concepción de Oriente',
                    'Conchagua',
                    'El Carmen',
                    'El Sauce',
                    'Intipucá',
                    'La Unión',
                    'Lislique',
                    'Meanguera del Golfo',
                    'Nueva Esparta',
                    'Pasaquina',
                    'Polorós',
                    'San Alejo',
                    'San José',
                    'Santa Rosa de Lima',
                    'Yayantique',
                    'Yucuaiquín'
                ],
            ],
            [
                'name' => 'Morazán',
                'towns' => [
                    'Arambala',
                    'Cacaopera',
                    'Chilanga',
                    'Corinto',
                    'Delicias de Concepción',
                    'El Divisadero',
                    'El Rosario',
                    'Gualococti',
                    'Guatajiagua',
                    'Joateca',
                    'Jocoaitique',
                    'Jocoro',
                    'Lolotiquillo',
                    'Meanguera',
                    'Osicala',
                    'Perquín',
                    'San Carlos',
                    'San Fernando',
                    'San Francisco Gotera',
                    'San Isidro',
                    'San Simón',
                    'Sensembra',
                    'Sociedad',
                    ' Torola',
                    'Yamabal',
                    'Yoloaiquín'
                ],
            ],
            [
                'name' => 'San Miguel',
                'towns' => [
                    'Carolina',
                    'Chapeltique',
                    'Chinameca',
                    'Chirilagua',
                    'Ciudad Barrios',
                    'Comacarán',
                    'El Tránsito',
                    'Lolotique',
                    'Moncagua',
                    'Nueva Guadalupe',
                    'Nuevo Edén de San Juan',
                    'Quelepa',
                    'San Antonio del Mosco',
                    'San Gerardo',
                    'San Jorge',
                    'San Luis de la Reina',
                    'San Miguel',
                    'San Rafael Oriente',
                    'Sesori',
                    'Uluazapa'
                ],
            ],
            [
                'name' => 'San Salvador',
                'towns' => [
                    'Aguilares',
                    'Apopa',
                    'Ayutuxtepeque',
                    'Cuscatancingo',
                    'Ciudad Delgado',
                    'El Paisnal',
                    'Guazapa',
                    'Ilopango',
                    'Mejicanos',
                    'Nejapa',
                    'Panchimalco',
                    'Rosario de Mora',
                    'San Marcos',
                    'San Martín',
                    'San Salvador',
                    'Santiago Texacuangos',
                    'Santo Tomás',
                    'Soyapango',
                    'Tonacatepeque'
                ],
            ],
            [
                'name' => 'San Vicente',
                'towns' => [
                    'Apastepeque',
                    'Guadalupe',
                    'San Cayetano Istepeque',
                    'San Esteban Catarina',
                    'San Ildefonso',
                    'San Lorenzo',
                    'San Sebastián',
                    'San Vicente',
                    'Santa Clara',
                    'Santo Domingo',
                    'Tecoluca',
                    'Tepetitán',
                    'Verapaz'
                ],
            ],
            [
                'name' => 'Santa Ana',
                'towns' => [
                    'Candelaria de la Frontera',
                    'Chalchuapa',
                    'Coatepeque',
                    'El Congo',
                    'El Porvenir',
                    'Masahuat',
                    'Metapán',
                    'San Antonio Pajonal',
                    'San Sebastián Salitrillo',
                    'Santa Ana',
                    'Santa Rosa Guachipilín',
                    'Santiago de la Frontera',
                    'Texistepeque'
                ],
            ],
            [
                'name' => 'Sonsonate',
                'towns' => [
                    'Acajutla',
                    'Armenia',
                    'Caluco',
                    'Cuisnahuat',
                    'Izalco',
                    'Juayúa',
                    'Nahuizalco',
                    'Nahulingo',
                    'Salcoatitán',
                    'San Antonio del Monte',
                    'San Julián',
                    'Santa Catarina Masahuat',
                    'Santa Isabel Ishuatán',
                    'Santo Domingo Guzmán',
                    'Sonsonate',
                    'Sonzacate'
                ],
            ],
            [
                'name' => 'Usulután',
                'towns' => [
                    'Alegría',
                    'Berlín',
                    'California',
                    'Concepción Batres',
                    'El Triunfo',
                    'Ereguayquín',
                    'Estanzuelas',
                    'Jiquilisco',
                    'Jucuapa',
                    'Jucuarán',
                    'Mercedes Umaña',
                    'Nueva Granada',
                    'Ozatlán',
                    'Puerto El Triunfo',
                    'San Agustín',
                    'San Buenaventura',
                    'San Dionisio',
                    'San Francisco Javier',
                    'Santa Elena',
                    'Santa María',
                    'Santiago de María',
                    'Tecapán',
                    'Usulután'
                ]
            ],

        ];


        foreach ($statesTowns as $state) {
            $stateID = State::firstOrCreate(
                ['name' => $state['name']],
            )->id;

            Town::factory(count($state['towns']))->sequence(
                fn($sequence) => ['name' => $state['towns'][$sequence->index]]
            )->create([
                    'state_id' => $stateID
            ]);
        }
    }
}
