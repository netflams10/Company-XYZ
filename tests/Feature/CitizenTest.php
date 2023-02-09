<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Ward;
use Tests\TestCase;

class CitizenTest extends TestCase
{
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_if_admin_can_create_citizen ()
    {
        $data = [
            'full_name' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'gender' => rand(1, 2),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'ward_id' => Ward::all()->random()->id,
        ];
        $response = $this->post('api/create-citizen', $data);

        dd($response->data);

        $response->assertStatus(201);
    }
}
