<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use HasApiTokens, HasFactory, Notifiable;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'nom' => $this->faker->firstName,
            'prenom' => $this->faker->lastName,
            'email' => fake()->unique()->safeEmail(),
            'password' => password_hash($this->faker->password, PASSWORD_DEFAULT),
        ];
      }
}
