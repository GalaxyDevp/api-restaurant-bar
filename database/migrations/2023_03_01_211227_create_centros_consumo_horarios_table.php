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
        Schema::create('centros_consumo_horarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('centro_consumo_id')->constrained('centros_consumos')->cascadeOnDelete();
            $table->enum('dia', ['0', '1','2', '3', '4', '5', '6']);
            $table->time('hora_inicio')->default('12:00:00');
            $table->time('hora_final')->default('13:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros_consumo_horarios');
    }
};
