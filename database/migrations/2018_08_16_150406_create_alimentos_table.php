<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alimentos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('categoria_alimentos_id');
            $table->foreign('categoria_alimentos_id')->references('id')->on('categoria_alimentos');

            $table->unsignedInteger('tipo_alimentos_id');
            $table->foreign('tipo_alimentos_id')->references('id')->on('tipo_alimentos');

            $table->unsignedInteger('indice_glucemicos_id');
            $table->foreign('indice_glucemicos_id')->references('id')->on('indice_glucemicos');

            $table->string('nombre');
            $table->double('peso_porcion');
            $table->double('gramo_carbohidrato');
            $table->string('tamano_porcion');
            $table->double('calorias');
            $table->double('grasas_totales');
            $table->double('grasas_saturadas');
            $table->double('fibra_dietaria');
            $table->double('grasas_trans');
            $table->double('sodio');
            $table->double('proteinas');
            $table->double('potasio');
            $table->string('img');

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
        Schema::dropIfExists('alimentos');
    }
}
