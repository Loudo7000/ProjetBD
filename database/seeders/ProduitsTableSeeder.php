<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produits')->insert([
            [
                'nom' => 'Produit1',
                'caracteristique' => 'caracteristique1',
                'photo' => 'rat.jpeg',
                'prix' => 300,
                'fournisseur_id' => '1',
            ],
            [
                'nom' => 'Produit2',
                'caracteristique' => 'caracteristique2',
                'photo' => 'rat.jpeg',
                'prix' => 3002,
                'fournisseur_id' => '2',
            ],
            [
                'nom' => 'Govee Ampoule LED',
                'caracteristique' => 'Govee Ampoule LED avec contrôle par application, ampoules Bluetooth RVB A19 7 W équivalentes à 60 W, synchronisation de la musique, ampoule à intensité variable pour décoration d\'intérieur, minuterie pour mode lever du soleil et coucher de soleil, facile à installerGovee Ampoule LED',
                'photo' => 'AmpouleRgb.jpg',
                'prix' => 16.99,
                'fournisseur_id' => '3',
            ],
        ]);
    }
}