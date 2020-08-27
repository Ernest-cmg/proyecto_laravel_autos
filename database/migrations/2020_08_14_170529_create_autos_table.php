<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->id();
            $table->string('marca')->nullable();
            $table->string('condicion')->nullable();
            $table->string('anno')->nullable();
            $table->string('departamento')->nullable();
            $table->string('tipo_combustible');
            $table->string('motor');
            $table->Integer('kilometraje');
            $table->string('transmision');
            $table->string('color');
            $table->string('caracteristicas_adicionales');
            $table->double('presio');
            $table->string('foto');

            $table->foreignId('user_id')->constrained();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autos');
    }
}
