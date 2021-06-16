<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->delete();
        DB::table('usuario')->insert([
            'nombre'=>'usuario1',
            'ci'=>'12664475',
            'rol_id'=>'1'
        ]);
        DB::table('usuario')->insert([
            'nombre'=>'Jorgiña torrez',
            'ci'=>'12664477',
            'rol_id'=>'2'
        ]);
        DB::table('usuario')->insert([
            'nombre'=>'usuario3',
            'ci'=>'12664478',
            'rol_id'=>'3'
        ]);
    }
}
