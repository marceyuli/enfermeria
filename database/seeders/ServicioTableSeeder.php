<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicio')->delete();
      //  DB::table('servicio')->truncate();
        for($i=1;$i<11;$i++){
            DB::table('servicio')->insert([
                'nombre'=>'servicio'.$i,
                'descripcion'=>'esta es la descripcion'.$i,
                'costo'=>'costo '.$i
            ]);
        }
    }
}
