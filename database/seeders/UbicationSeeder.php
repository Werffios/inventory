<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ubication;

class UbicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ubication::create([
            'name' => 'Biblioteca',
        ]);
        Ubication::create([
            'name' => 'Secretaria',
        ]);
        Ubication::create([
            'name' => 'Bodega',
        ]);
        Ubication::create([
            'name' => 'Cafeteria',
        ]);
        Ubication::create([
            'name' => 'Laboratorio',
        ]);
        Ubication::create([
            'name' => 'Sala de profesores',
        ]);
        Ubication::create([
            'name' => 'Sala de estudiantes',
        ]);
        Ubication::create([
            'name' => 'Sala de reuniones',
        ]);
        Ubication::create([
            'name' => 'Sala de juntas',
        ]);
        Ubication::create([
            'name' => 'Sala de conferencias',
        ]);
        Ubication::create([
            'name' => 'Sala de eventos',
        ]);
        Ubication::create([
            'name' => 'Oficina',
        ]);
        Ubication::create([
            'name' => 'Oficina de profesor',
        ]);
        Ubication::create([
            'name' => 'Oficina de estudiante',
        ]);

        Ubication::create([
            'name' => 'Oficina de TI',
        ]);
    }
}
