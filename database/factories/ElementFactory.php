<?php

namespace Database\Factories;

use App\Models\Trademark;
use App\Models\Type;
use App\Models\Ubication;
use App\Models\Dependency;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Element>
 */
class ElementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'placa' => $this->faker->unique()->randomNumber(8),
            'name' => $this->faker->sentence,
            'serial' => $this->faker->unique()->randomNumber(8),
            'model' => $this->faker->unique()->randomNumber(8),
            'features' => $this->faker->sentence,
            'movable' => $this->faker->randomElement(['si', 'no']),
            'trademark_id' => Trademark::all()->random()->id,
            'type_id' => Type::all()->random()->id,
            'dependency_id' => Dependency::all()->random()->id,
            'ubication_id' => Ubication::all()->random()->id,


        ];
    }
}
