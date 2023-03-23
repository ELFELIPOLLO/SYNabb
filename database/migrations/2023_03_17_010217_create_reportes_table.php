<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->biginteger('alumnoid');
            $table->string('grupotabla');
            $table->string('nombre');
            $table->boolean('asistencia')->default(false);
            $table->boolean('entrega_de_trabajos')->default(false);
            $table->boolean('otro')->default(false);
            $table->boolean('comportamiento')->default(false);
            $table->boolean('salud')->default(false);
            $table->text('justificacion')->nullable();
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
        Schema::dropIfExists('reportes');
    }
}
