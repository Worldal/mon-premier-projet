<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'nom' => $this->faker->word(),
            'description' => $this->faker->sentence($nbWords = 9, $variableNbWords = true),
            'lien_image' => 'https://picsum.photos/200/300',
            'prix' => $this->faker->numberBetween($min = 1, $max =50),
            'tva' => $this->faker->numberBetween($min = 1, $max =5),
        ];
      }
}
