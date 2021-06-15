<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaventaservicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaventaservicio', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cita_id')->constrained('cita');
            $table->foreignId('nota_venta_id')->constrained('nota_venta');
            $table->foreignId('servicio_id')->constrained('servicio');
            $table->string('descripcion');
            $table->integer('cantidad');
            $table->integer('costo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notaventaservicio');
    }
}
