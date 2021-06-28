<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaventaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nota_venta')->delete();
        DB::table('nota_venta')->insert([
            'enfermera_user_id'=>'1',
            'cliente_user_id'=>'1',
            'ubicacion_id'=>'1',
            'metodopago_id'=>'1',
            'total'=>800
        ]);
    }
}
