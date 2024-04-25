<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>fake()->lastName(),
            'prenom'=>fake()->firstName(),
            'sexe'=>fake()->randomElement(['F','M']),
            'tel'=>fake()->phoneNumber(),
            'email'=>fake()->safeEmail(),
            'fonction'=>fake()->randomElement(['T','TS','Ingenieur','Médecin','Pilot']),
            'created_at'=>now(),
            'updated_at'=>now() 
        ];
    }
}
