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
        Schema::create('aspirante_posgrados', function (Blueprint $table) {
            $table->id();
            $table->integer('idAspirante');
            $table->string('posgrado');
            $table->string('institucion');
            $table->date('fechaIngreso');
            $table->date('fechaEgreso');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aspirante_posgrados');
    }
};
