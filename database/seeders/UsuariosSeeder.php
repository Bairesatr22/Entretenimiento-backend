<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
			DB::table('usuarios')->insert([
            'nombre' =>'BAIRESATR',
            'correo' => 'bairesatr@gmail.com',
            'clave' =>'123456',
			'nivel'=>'Admin',
        ]);
    }
}
