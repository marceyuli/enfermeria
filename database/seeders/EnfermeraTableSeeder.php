<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnfermeraTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('enfermera')->delete();
        DB::table('enfermera')->insert([
            'usuario_id'=>'2',
            'especialidad'=>'vacunacion en el culo xd'
        ]);
    }
}
