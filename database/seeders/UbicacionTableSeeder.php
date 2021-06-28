<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicacion')->delete();
            DB::table('ubicacion')->insert([
               'coordenadas'=>'coord',
               'cliente_user_id'=>'1'
            ]);
    }
}
