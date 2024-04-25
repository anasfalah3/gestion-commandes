<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ref'=>'produit ' . Str::random(8),
            'nom'=>'produit'.rand(0,40),
            'prix'=>rand(600,8000),
            'categorie'=>fake()->randomElement(['PC Portable','PC Poste' ,'Smartphone','Tablette']),
            'created_at'=>now(),
            'updated_at'=>now() 
        ];
    }
}
