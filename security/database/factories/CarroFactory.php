<?php

namespace Database\Factories;

use App\Models\Carro;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Carro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'cor' => $this->faker->word,
        'modelo' =>$this->faker->word,
        'ano' =>$this->faker->numberBetween(2005,2021),

        ];
    }
}
