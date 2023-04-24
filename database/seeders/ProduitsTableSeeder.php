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
        ]);
    }
}