<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Citizen>
 */
class CitizenFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * id, full name, gender, address, phone, wardid,
     */
    public function definition()
    {
        return [
            'full_name' => fake()->firstName() . ' ' . fake()->lastName(),
            'gender'    => rand(1, 2),
            'address'   => fake()->address(),
            'phone'     => fake()->phoneNumber(),
            'ward_id'   => \App\Models\Ward::all()->random()->id,
        ];
    }
}
