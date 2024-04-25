<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = ['ref', 'nom','prix','categorie'];

    public function commande(){
        return $this->belongsToMany(Commande::class)->withPivot('QteCmd');
    }
}
