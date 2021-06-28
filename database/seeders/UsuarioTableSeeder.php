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
        DB::table('users')->delete();
        DB::table('users')->insert([
            'nombre'=>'usuario1',
            'username'=>'user1',
            'ci'=>'12664475',
            'password'=>bcrypt("contra1"),
            'rol_id'=>'1'
        ]);
        DB::table('users')->insert([
            'nombre'=>'Jorgiña torrez',
            'username'=>'user2',
            'ci'=>'12664477',
            'password'=>bcrypt("contra2"),
            'rol_id'=>'2'
        ]);
        DB::table('users')->insert([
            'nombre'=>'usuario3',
            'username'=>'user3',
            'ci'=>'12664478',
            'password'=>bcrypt("contra3"),
            'rol_id'=>'3'
        ]);
    }
}
