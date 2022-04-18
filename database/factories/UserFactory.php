<?php

namespace Database\Factories;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
=======
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
<<<<<<< HEAD
            'id_role' => 2,
=======
            'username' => $this->faker->unique()->userName(),
            'phone' => $this->faker->phoneNumber(),
            'id_role' => $this->faker->randomElement([2, 3]),
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
<<<<<<< HEAD
     * @return \Illuminate\Database\Eloquent\Factories\Factory
=======
     * @return static
>>>>>>> 3abbe9a20101da6a35b2b6d345e4d6901f9c30cf
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
