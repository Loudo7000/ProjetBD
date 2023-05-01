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
                'adresse' => '3293 Dundas St
                London, Ontario(ON), N6B 3L5',
            ],
            [
                'nom' => 'Govee',
                'adresse' => '2594 Davis Drive
                Welland, Ontario(ON), L3B 3Z6',
            ],
            [
                'nom' => 'fournisseur3',
                'adresse' => '3571 Halsey Avenue
                Toronto, Ontario(ON), M3B 2W6',
            ],
            [
                'nom' => 'fournisseur4',
                'adresse' => '3862 St. John Street
                Denzil, Saskatchewan(SK), S4P 3Y2
                
                306-358-5888',
            ],
            [
                'nom' => 'fournisseur5',
                'adresse' => '2164 Kinchant St
                Prince George, British Columbia(BC), V2N 2S6',
            ],
        ]);
    }
}