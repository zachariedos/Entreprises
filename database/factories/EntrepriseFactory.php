<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entreprises>
 */
class EntrepriseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'siret' => $this->faker->numberBetween($min = 100000000, $max = 999999999),
            'user_id' => \App\Models\User::factory()->create()->id,
            'adresse' => $this->faker->streetAddress(),
            'postalCode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'siren' => $this->faker->numberBetween($min = 100000000000, $max = 999999999999),
            'creationDate' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'sliceNbEmployee' => $this->faker->randomElement($array = array('00','01','02','03','10','11','12','21','22','31','32','41','42','51','52','53'))
        ];
    }
}
