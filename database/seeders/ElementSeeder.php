<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Element;

class ElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Element::create([
            'placa' => '123456',
            'name' => 'Element 1',
            'type_id' => 1,
            'dependency_id' => 1,
            'trademark_id' => 1,
            'ubication_id' => 1,
            'serial' => '123456',
            'model' => 'ABC123',
            'features' => 'Element 1 features',
            'movable' => Element::STATUS_UNMOVABLE,
        ]);
        Element::create([
            'placa' => '123457',
            'name' => 'Element 2',
            'type_id' => 2,
            'dependency_id' => 2,
            'trademark_id' => 2,
            'ubication_id' => 2,
            'serial' => 'Serial 2',
            'model' => 'Model 2',
            'features' => 'Features 2',
            'movable' => Element::STATUS_MOVABLE,
        ]);
        Element::factory(40)->create();

    }
}
