<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centros_consumo_detalles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('centro_consumo_id')->constrained('centros_consumos')->cascadeOnDelete();
            $table->foreignId('hotel_id')->constrained('hoteles')->cascadeOnDelete();
            $table->smallInteger('destacado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros_consumo_detalles');
    }
};
