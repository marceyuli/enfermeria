<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(EnfermeraTableSeeder::class);
        $this->call(ClienteTableSeeder::class);
        $this->call(ServicioTableSeeder::class);
        $this->call(MetodopagoTableSeeder::class);
        $this->call(CitaTableSeeder::class);
        $this->call(UbicacionTableSeeder::class);
        $this->call(NotaventaTableSeeder::class);
        $this->call(NotaventaservicioTableSeeder::class);
        $this->call(FacturaTableSeeder::class);
    }
}
