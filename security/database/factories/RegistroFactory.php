<?php

namespace Database\Factories;

use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local' => $this->faker->word,
            'data' => $this->faker->bothify('###/###/###'),
            'valor' => $this->faker->randomFloat(2,100,2000),
        ];
    }
}
