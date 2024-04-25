<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Client;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'dateCmd'=>fake()->dateTime(),
            'etatCmd'=>fake()->randomElement(['Refusé','Validé','En Cours']),
            'client_id'=>Client::all()->random()->id,
            'created_at'=>now(),
            'updated_at'=>now() 
        ];
    }
}
