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
                'nom' => 'rat',
                'prenom' => 'prerat',
                'adresse' => 'ya un rat la',
                'email' => 'rat@gmail.com',
                'password' => Hash::make('rat'),
            ],
            [
                'nom' => 'rat2',
                'prenom' => 'prerat2',
                'adresse' => 'ya un rat la2',
                'email' => 'rat2@gmail.com',
                'password' => Hash::make('rat2'),
            ],
        ]);
    }
}

