<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
            'name' => 'Computador',
        ]);
        Type::create([
            'name' => 'Portatil',
        ]);
        Type::create([
            'name' => 'Tablet',
        ]);
        Type::create([
            'name' => 'Celular',
        ]);
        Type::create([
            'name' => 'Proyector',
        ]);
        Type::create([
            'name' => 'Impresora',
        ]);
        Type::create([
            'name' => 'Escanner',
        ]);
        Type::create([
            'name' => 'Monitor',
        ]);
        Type::create([
            'name' => 'Teclado',
        ]);
        Type::create([
            'name' => 'Mouse',
        ]);
        Type::create([
            'name' => 'Parlantes',
        ]);
        Type::create([
            'name' => 'Audifonos',
        ]);
        Type::create([
            'name' => 'Cargador',
        ]);
        Type::create([
            'name' => 'Cable',
        ]);
        Type::create([
            'name' => 'Router',
        ]);
        Type::create([
            'name' => 'Switch',
        ]);
        Type::create([
            'name' => 'Hub',
        ]);
        Type::create([
            'name' => 'Modem',
        ]);
        Type::create([
            'name' => 'Antena',
        ]);
        Type::create([
            'name' => 'Cámara',
        ]);
        Type::create([
            'name' => 'Disco Duro',
        ]);

    }
}
