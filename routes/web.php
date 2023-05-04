<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\ProduitsController;
use App\Http\Controllers\FournisseursController;
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


// Produit
Route::get('/produits',
[ProduitsController::class, 'index'])->name('produits.index');

Route::get('/produits/{produit}', 
[ProduitsController::class, 'show'])->name('produits.show');

Route::get('/produits/{idP}/store', 
[ProduitsController::class, 'storeCommandeProduit'])->name('produits.storeCommandeProduit');

Route::get('/produit/ajout',
[ProduitsController::class, 'create'])->name('produits.create');

Route::get('/produit/{id}/modifier',
[ProduitsController::class, 'edit'])->name('produits.edit');

Route::post('/produits',
[ProduitsController::class, 'store'])->name('produits.store');

Route::patch('/produits/{id}/modifier',
[ProduitsController::class, 'update'])->name('produits.update');


// Fournisseur
Route::get('/fournisseurs/ajout',
[FournisseursController::class, 'create'])->name('fournisseurs.create');

Route::post('/fournisseurs',
[FournisseursController::class, 'store'])->name('fournisseurs.store');