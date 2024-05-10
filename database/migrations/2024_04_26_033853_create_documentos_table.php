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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            //$table->bigIncrements('idDocumento'); //bigint(20)
            $table->bigInteger('idExpediente');//int(11)
            $table->tinyInteger('idTipoDocumento');//tinyint(4)
            $table->tinyInteger('idExtension')->nullable();//tinyint(4)

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documentos');
    }
};
