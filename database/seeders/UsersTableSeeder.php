<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'nom' => 'admin1',
                'prenom' => 'admin',
                'adresse' => 'ya un rat la',
                'email' => 'admin@gmail.com',
                'droit' => 'admin',
                'avatar' => 'ratbleu.jpg',
                'password' => Hash::make('rat'),
            ],
            [
                'nom' => 'admin2',
                'prenom' => 'admin',
                'adresse' => 'ya un rat la',
                'email' => 'admin2@gmail.com',
                'droit' => 'admin',
                'avatar' => 'ratrouge.jpg',
                'password' => Hash::make('rat'),
            ],
            [
                'nom' => 'rat',
                'prenom' => 'prerat',
                'adresse' => 'ya un rat la',
                'email' => 'rat@gmail.com',
                'droit' => 'client',
                'avatar' => 'ratbleu.jpg',
                'password' => Hash::make('rat'),
            ],
            [
                'nom' => 'rat2',
                'prenom' => 'prerat2',
                'adresse' => 'ya un rat la2',
                'email' => 'rat2@gmail.com',
                'droit' => 'client',
                'avatar' => 'ratbleu.jpg',
                'password' => Hash::make('rat2'),
            ],
        ]);
    }
}

