<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ClienteTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cliente')->delete();
        DB::table('cliente')->insert([
            'usuario_id'=>'3',
            'telefono'=>'78559067'
        ]);
    }
}
