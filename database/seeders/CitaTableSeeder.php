<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cita')->delete();
       
            DB::table('cita')->insert([
                'hora'=>'15:00',
                'fecha'=>'2021-06-14',
                'duracion'=>'02:00'
            ]);
       
    }
}
