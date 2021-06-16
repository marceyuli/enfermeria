<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->delete();
        DB::table('rol')->insert([
            ('nombre')=>('admin'),
            ('descripcion')=>('administrador del sitio')
        ]);
        DB::table('rol')->insert([
            ('nombre')=>('enfermera'),
            ('descripcion')=>('enfermera de la enfermeria')
        ]);
        DB::table('rol')->insert([
            ('nombre')=>('cliente'),
            ('descripcion')=>('cliente de la enfermeria')
        ]);
    }
}
