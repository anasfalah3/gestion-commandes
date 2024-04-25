<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Commande;
use App\Models\Produit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CommandeProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'commande_id'=>Commande::all()->random()->id,
            'produit_id'=>Produit::all()->random()->id,
            'QteCmd'=>rand(0,20),
            'created_at'=>now(),
            'updated_at'=>now() 
        ];
    }
}
