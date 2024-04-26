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
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id('idExpediente')->autoIncrement;
            $table->integer('idAspirante');//int(11)
            $table->dateTime('fechaAbierto');// dateTimeTz para zona horaria
            $table->dateTime('fechaAprobado')->nullable;// dateTimeTz para zona horaria
            $table->tinyInteger('idstatus');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedientes');
    }
};
