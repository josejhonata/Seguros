<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carro;
use App\Models\User;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios=User::where('tipo','=','cliente')->get();

        foreach ($usuarios as $usuario ) {
        	Carro::factory(1)->create([

        	'user_id'=> $usuario->id,
        	]);
        }


    }
}
