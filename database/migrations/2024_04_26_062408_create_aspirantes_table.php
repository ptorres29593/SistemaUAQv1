<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aspirantes', function (Blueprint $table) {
            $table->id();
            
            $table->mediumInteger('clave');
            $table->string('nombre');
            $table->string('apellidoPaterno');
            $table->string('apellidoMaterno');
            $table->date('fechaNacimiento');
            $table->smallInteger('nacionalidad');
            $table->string('posgrado');
            $table->string('estadoCivil');
            $table->tinyInteger('estadoNacimiento');
            $table->string('lugarNacimientoExtranjero');
            $table->string('telefonoFijo');
            $table->string('telefonoMovil');
            $table->string('email');
            $table->string('direccionCalle');
            $table->string('direccionNumero');
            $table->string('direccionColonia');
            $table->string('direccionCP');
            $table->integer('direccionMunicipio');
            $table->tinyInteger('direccionEstado');
            $table->string('universidad');
            $table->string('universidadDireccion');
            $table->string('licenciatura');
            $table->string('fechaIngreso');
            $table->string('fechaEgreso');
            $table->float('promedioGeneral');
            $table->tinyInteger('tieneTitulo');
            $table->string('LGAC');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirantes');
    }
};
