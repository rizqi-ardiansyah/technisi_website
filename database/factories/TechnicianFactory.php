<?php

namespace Database\Factories;

use App\Models\Specialization;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Technician>
 */
class TechnicianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'specialist_id' =>$this->faker->rand(1, Specialization::class),
            'user_id' => $this->faker->rand(1, User::count()),
            'certification' => $this->faker->sentence(),
            'address' => $this->faker->address(),
            'photos'  => $this->faker->image('public/assets/images/tech', 400, 300),
        ];
    }
}
