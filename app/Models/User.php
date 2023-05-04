<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable= [
        'nom',
        'prenom',
        'email',
        'adresse',
        'droit',
        'avatar',
        'password'
    ];
    protected $hidden= [
        'password',
        'remember_token',
    ];

    public function commandes()
    {
        return $this->HasMany('App\Models\Commande');
    }
}
