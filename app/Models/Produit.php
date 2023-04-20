<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable= [
        'nom',
        'caracteristique',
        'photo',
        'prix',
        'fournisseur_id'
    ];

    public function fournisseurs()
    {
        return $this->belongsToMany('App\Models\Fournisseurs');
    }
}
