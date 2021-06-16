<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaventaservicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notaventaservicio')->delete();
        DB::table('notaventaservicio')->insert([
            'nota_venta_id'=>'1',
            'servicio_id'=>'1',
            'cita_id'=>1,
            'descripcion'=>'vacuna en el culo',
            'cantidad'=>'8',
            'costo'=>100
        ]);
    }
}
