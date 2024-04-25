<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Client;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\CommandeProduit;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Client::factory(20)->create();
        Produit::factory(100)->create();
        Commande::factory(40)->create();
        CommandeProduit::factory(20)->create();

    //     $commande1 = Commande::find(1); 
    //     $commande2 = Commande::find(2);
    //     $produit1 = Produit::find(1);
    //     $produit2 = Produit::find(2);
    //     $produit3 = Produit::find(3);
    //     $produit4 = Produit::find(4);
    //     $produit5 = Produit::find(5);


    //     $commande1->produits()->attach($produit1,
    //         [
    //             'QteCmd' => rand(0,20),
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ]  
    //     );
    //     $commande1->produits()->attach($produit2,
    //         [
    //             'QteCmd' => rand(0,20),
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ]  
    //     );
    //     $commande2->produits()->attach($produit3,
    //         [
    //             'QteCmd' => rand(0,20),
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ]  
    //     );
    //     $commande2->produits()->attach($produit4,
    //         [
    //             'QteCmd' => rand(0,20),
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ]  
    //     );
    //     $commande2->produits()->attach($produit5,
    //         [
    //             'QteCmd' => rand(0,20),
    //             'created_at' => now(),
    //             'updated_at' => now()
    //         ]  
    //     );
    
    }
}
