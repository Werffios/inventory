<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dependency;

class DependencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dependency::create([
            'name' => 'Sistemas',
        ]);
        Dependency::create([
            'name' => 'Contabilidad',
        ]);
        Dependency::create([
            'name' => 'Recursos Humanos',
        ]);
        Dependency::create([
            'name' => 'Comunicaciones',
        ]);
        Dependency::create([
            'name' => 'Administración',
        ]);
        Dependency::create([
            'name' => 'Financiera',
        ]);
        Dependency::create([
            'name' => 'Compras',
        ]);
        Dependency::create([
            'name' => 'Biblioteca',
        ]);
        Dependency::create([
            'name' => 'Vicerrectoria',
        ]);
        Dependency::create([
            'name' => 'Vicepresidencia',
        ]);
        Dependency::create([
            'name' => 'Decanatura',
        ]);
        Dependency::create([
            'name' => 'Secretaria',
        ]);
        Dependency::create([
            'name' => 'Coordinación',
        ]);
        Dependency::create([
            'name' => 'Otro',
        ]);
    }
}
