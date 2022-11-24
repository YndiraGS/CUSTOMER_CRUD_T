<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->word(),
            'ruc'       => $this->faker->rand(111111111, 999999999),
            'email'     => $this->faker->safeEmail(),
            'page'      => $this->faker->domainName(),
            'status'    => $this->faker->randomElement([true, false])

        ];
    }
}
