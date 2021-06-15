<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetodopagoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        DB::table('metodopago')->delete();
        for($i=1;$i<11;$i++){
            DB::table('metodopago')->insert([
                'nombre'=>'metodopago {{$i}}',
            ]);
        }
    }
}
