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
                'nom' => 'ratduit',
                'caracteristique' => 'prerat',
                'photo' => 'ya un rat la',
                'prix' => 300,
                'fournisseur_id' => '1',
            ],
        ]);
    }
}