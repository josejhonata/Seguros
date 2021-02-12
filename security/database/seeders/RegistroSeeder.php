<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Registro;

class RegistroSeeder extends Seeder
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
        	Registro::factory(1)->create([
        		'user_id'=>$usuario->id,
        	]);
        }

    }
}
