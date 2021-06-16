<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FacturaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('factura')->delete();
        DB::table('factura')->insert([
            'nota_venta_id'=>'1',
            'nit'=>'1855112',
            'nombre'=>'juanito alcachofa',
        ]);
    }
}
