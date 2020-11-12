<?php

namespace Database\Factories\System;

use App\Models\System\Seed;
use Illuminate\Database\Eloquent\Factories\Factory;

class SeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Seed::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
        ];
    }
}
