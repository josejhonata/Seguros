<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(5)->create(['tipo'=>'atendente']);

         \App\Models\User::factory(5)->create(['tipo'=>'cliente']);

         $this->call([
         	CarroSeeder::class,
         	RegistroSeeder::class,
         ]);
    }
}
