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

    public function fournisseur()
    {
        return $this->belongsTo('App\Models\Fournisseur');
    }

    public function commandes()
    {
        return $this->belongsToMany('App\Models\Cammande');
    }
}
