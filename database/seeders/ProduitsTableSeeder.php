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
                'nom' => 'Govee Ampoule LED',
                'caracteristique' => 'Govee Ampoule LED avec contrôle par application, ampoules Bluetooth RVB A19 7 W équivalentes à 60 W, synchronisation de la musique, ampoule à intensité variable pour décoration d\'intérieur, minuterie pour mode lever du soleil et coucher de soleil, facile à installerGovee Ampoule LED',
                'photo' => 'AmpouleRgb.jpg',
                'prix' => 16.99,
                'fournisseur_id' => '3',
            ],
            [
                'nom' => 'Govee Bandes lumineuses LED intelligentes',
                'caracteristique' => '10 m, Wi-Fi, fonctionne avec Alexa et Google Assistant, lumières LED de contrôle par application pour la maison, la cuisine, la télévision, les fêtes, 2 rouleaux de 5 m (seulement 2,4 G WiFi pris en charge)',
                'photo' => 'rbgLight.jpg',
                'prix' => 37.99,
                'fournisseur_id' => '3',
            ],
            [
                'nom' => 'TUF Gaming GT501',
                'caracteristique' => 'Boîtier d’ordinateur pour cartes mères jusqu’à EATX avec boîtier avant USB 3.0 GT501/GRY/avec poignée',
                'photo' => 'boitierAsus.jpg',
                'prix' => 246.98,
                'fournisseur_id' => '4',
            ],
            [
                'nom' => 'Asus ROG Strix Helios GX601',
                'caracteristique' => 'Boîtier d\'ordinateur de tour moyenne RVB pour cartes mères jusqu\'à EATX avec panneau avant USB 3.1, verre trempé fumé, construction en aluminium brossé et acier et quatre ventilateurs de boîtier Noir',
                'photo' => 'boitierAsus2.jpg',
                'prix' => 463.72,
                'fournisseur_id' => '4',
            ],
            [
                'nom' => 'Asus ROG Strix B550-F',
                'caracteristique' => 'Gaming WiFi II AMD AM4 (3e génération Ryzen) Carte mère de jeu ATX (PCIe 4.0, WiFi 6E, LAN 2,5 Go, flash BIOS, HDMI 2.1, en-tête RGB adressable Gen 2 et synchronisation Aura',
                'photo' => 'carteMereAsus.jpg',
                'prix' => 259.98,
                'fournisseur_id' => '4',
            ],
            [
                'nom' => 'ASUS Carte mère ATX Prime B660-PLUS',
                'caracteristique' => 'LGA 1700 (Intel 12e génération) (PCIe 4.0, DDR4, 3xM.2, LAN 2,5 Go, USB 3.2 Gen 2x2 Type-C, USB 3.2 Gen 1 Type-C, prise en charge Thunderbolt 4)',
                'photo' => 'carteMereAsus2.jpg',
                'prix' => 179.99,
                'fournisseur_id' => '4',
            ],
        ]);
    }
}