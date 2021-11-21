<?php

namespace Database\Factories;

use Illuminate\Support\Str;

class StudentFactory extends \Illuminate\Database\Eloquent\Factories\Factory
{

    /**
     * @inheritDoc
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'gender' => 1,
        ];
    }
}
