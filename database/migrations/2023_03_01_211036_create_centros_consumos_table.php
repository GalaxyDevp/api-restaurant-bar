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
        Schema::create('centros_consumos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 180);
            $table->string('concepto_es', 200);
            $table->string('concepto_en', 200);
            $table->string('logo', 255);
            $table->string('img_portada', 255);
		$table->foreignId('categoria_id')->constrained('categorias')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centros_consumos');
    }
};
