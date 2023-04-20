<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CommandesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commandes')->insert([
            [
                'recuperation' => 'ratperation',
                'etat' => 'trestresrat',
                'user_id' => '2',
            ],
        ]);
    }
}