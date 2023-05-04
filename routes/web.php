<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\CommandesController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::get('/',
[ProduitsController::class, 'index'])->name('produits.index');

// User
        Route::get('/login',
        [UsersController::class, 'showloginform'])->name('login');

        Route::post('/login',
        [UsersController::class, 'login'])->name('users.login');

                //Déconnexion
        Route::post('/logout',
        [UsersController::class, 'logout'])->name('users.logout');

        //afficher
        Route::get('/usagers/index',
        [UsersController::class, 'index'])->name('users.index')->middleware('auth');
        
                //ajouter
        Route::get('/usagers/creation',
        [UsersController::class, 'create'])->name('users.create')->middleware('auth');
                
        Route::post('/usagers', 
        [UsersController::class, 'store'])->name('users.store')->middleware('auth');
        
                //modifier
        Route::get('/usagers/{id}/modifier/', 
        [UsersController::class, 'edit'])->name('users.edit')->middleware('auth');
        
        Route::patch('/usagers/{id}/modifier/', 
        [UsersController::class, 'update'])->name('users.update')->middleware('auth');
        
                //suprimer
        Route::delete('/usagers/{id}', 
        [UsersController::class, 'destroy'])->name('users.destroy')->middleware('auth');


// Produit
        Route::get('/produits',
        [ProduitsController::class, 'index'])->name('produits.index');

        Route::get('/produits/{produit}', 
        [ProduitsController::class, 'show'])->name('produits.show')->middleware('auth');

        Route::get('/produits/{idP}/store', 
        [ProduitsController::class, 'storeCommandeProduit'])->name('produits.storeCommandeProduit')->middleware('auth');

        Route::get('/produit/ajout',
        [ProduitsController::class, 'create'])->name('produits.create')->middleware('auth');

        Route::post('/produits',
        [ProduitsController::class, 'store'])->name('produits.store')->middleware('auth');

// Commande
        Route::get('/Panier',
        [CommandesController::class, 'index'])->name('commandes.index')->middleware('auth');

        Route::get('/Panier/{id}/{recup}/', 
        [CommandesController::class, 'update'])->name('commandes.update')->middleware('auth');