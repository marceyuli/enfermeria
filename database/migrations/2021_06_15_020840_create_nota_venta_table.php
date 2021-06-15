<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_venta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enfermera_usuario_ci')->constrained('enfermera');
            $table->foreignId('cliente_usuario_ci')->constrained('cliente');
            $table->foreignId('ubicacion_id')->constrained('ubicacion');
            $table->foreignId('metodopago_id')->constrained('metodopago');
            $table->integer('total');
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
        Schema::dropIfExists('nota_venta');
    }
}
