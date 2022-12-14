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
        Schema::create('empresa', function(Blueprint $table){
            $table->increments('id');
            $table->string('nombre_empresa');
            $table->string('correo');
            $table->string('telefono_empresa');
            $table->string('direccion');
            $table->integer('num_trabajadores');
            $table->string('giro');
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
        Schema::dropIfExists('empresa');
    }
};
