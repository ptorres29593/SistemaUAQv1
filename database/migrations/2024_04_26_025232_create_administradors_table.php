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
        Schema::create('administradors', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('password');
            $table->string('email');
            $table->string('posgradoAdm')->nullable();
            $table->tinyInteger('notificar');//boolean tal vez
            $table->tinyInteger('activo');//boolean tal vez

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administradors');
    }
};
