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
        Schema::create('extensiones', function (Blueprint $table) {
            $table->id();
            $table->id('idExtension')->autoIncrement;
            $table->tinyInteger('idformato');
            $table->string('extension');
            $table->string('mime');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extensiones');
    }
};
