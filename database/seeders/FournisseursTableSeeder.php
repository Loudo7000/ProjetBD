<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FournisseursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fournisseurs')->insert([
            [
                'nom' => 'fournirat',
                'adresse' => 'la ou il y a des rats',
            ],
            [
                'nom' => 'fournisseur1',
                'adresse' => 'adresse1',
            ],
            [
                'nom' => 'fournisseur2',
                'adresse' => 'adresse2',
            ],
            [
                'nom' => 'fournisseur3',
                'adresse' => 'adresse3',
            ],
            [
                'nom' => 'fournisseur4',
                'adresse' => 'adresse4',
            ],
            [
                'nom' => 'fournisseur5',
                'adresse' => 'adresse5',
            ],
        ]);
    }
}