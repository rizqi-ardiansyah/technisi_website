<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Message>
 */
class MessageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'msg_content' => $this->faker->sentence(),
            'is_seen' => $this->faker->boolean(),
            'sender' => $this->faker()->rand(1, User::count()),
            'receiver' => $this->faker()->rand(1, User::count()),
        ];
    }
}
