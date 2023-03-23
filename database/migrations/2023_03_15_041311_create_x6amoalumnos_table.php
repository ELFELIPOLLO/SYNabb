<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateX6AMOAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('x6amoalumnos', function (Blueprint $table) {
            $table->id();
            $table->String('Num_Control', 20);
            $table->String('Nombre', 300);
            $table->String('Grupo', 5);
            $table->boolean('Sexo');
            $table->date('Fecha_de_nacimiento');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('x6amoalumnos');
    }
}
