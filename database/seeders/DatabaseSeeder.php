<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FournisseursTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ProduitsTableSeeder::class);
        $this->call(CommandesTableSeeder::class);
        $this->call(CommandesProduitsTableSeeder::class);
    }
}
