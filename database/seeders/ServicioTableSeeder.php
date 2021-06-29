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
        $servicios = [
            [
                'Nombre' => 'Atencion de enfermeria',
                'Costo' => '30',
                'Descripcion' => 'Atencion de una enfermera por hora'
            ],
            [
                'Nombre' => 'Cuidado de pacientes',
                'Costo' => '30',
                'Descripcion' => 'Cuidado de pacientes por hora'
            ],
            [
                'Nombre' => 'Pacientes en estado critico',
                'Costo' => '40',
                'Descripcion' => 'Cuidado de pacientes por hora'
            ],
            [
                'Nombre' => 'Con disfuncion neuromuscular',
                'Costo' => '40',
                'Descripcion' => 'Cuidado de pacientes por hora'
            ],
            [
                'Nombre' => 'ACV (Embolia)',
                'Costo' => '30',
                'Descripcion' => 'Cuidado de pacientes por hora'
            ],
            [
                'Nombre' => 'Adultos mayores con Alzheimer',
                'Costo' => '25',
                'Descripcion' => 'Cuidado de pacientes por hora'
            ],
            [
                'Nombre' => 'Paciente operado',
                'Costo' => '30',
                'Descripcion' => 'Cuidado de pacientes por hora'
            ],
            [
                'Nombre' => 'Comfort e higiene a la persona post-tratada',
                'Costo' => '30',
                'Descripcion' => 'Cuidado de pacientes por hora'
            ],
            [
                'Nombre' => 'Atencion a recien nacidos, prematuros y pediatricos',
                'Costo' => '30',
                'Descripcion' => 'Cuidado de pacientes por hora'
            ],
            [
                'Nombre' => 'Inyectables',
                'Costo' => '15',
                'Descripcion' => 'Inyeccion'
            ],
            [
                'Nombre' => 'Suero',
                'Costo' => '20',
                'Descripcion' => 'Colocado de suero'
            ],
            [
                'Nombre' => 'Sondas',
                'Costo' => '20',
                'Descripcion' => 'Colocado de sonda'
            ],
            [
                'Nombre' => 'Control Glicemia',
                'Costo' => '10',
                'Descripcion' => 'Control de glicemia'
            ],
            [
                'Nombre' => 'Curaciones',
                'Costo' => '30',
                'Descripcion' => 'Precio por curacion'
            ],
            [
                'Nombre' => 'Nebulizaciones',
                'Costo' => '30',
                'Descripcion' => 'Precio por paciente'
            ],
            [
                'Nombre' => 'Preparacion de terapias a domicilio',
                'Costo' => '100',
                'Descripcion' => 'Preparacion de terapias a domicilio'
            ],
            [
                'Nombre' => 'Pruebas rapidas COVID 19',
                'Costo' => '50',
                'Descripcion' => 'Toma y resultado de prueba rapida COVID-19'
            ]
        ];

        foreach ($servicios as $servicio) {
            DB::table('servicio')->insert([
                'nombre' => $servicio['Nombre'],
                'costo' => $servicio['Costo'],
                'descripcion' => $servicio['Descripcion'],
                'url_imagen' => 'https://image.freepik.com/foto-gratis/empresaria-apreton-manos-hombre-negocios-que-muestra-respeto-opinion-primer-manos-que-sacuden_1163-4679.jpg'
            ]);
        }
    }
}
