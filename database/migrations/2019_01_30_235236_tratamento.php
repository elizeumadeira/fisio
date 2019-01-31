<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tratamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('paciente_id');
            $table->date('inicio')->useCurrent();
            $table->integer('status')->default(1);
            $table->double('valor')->default(0);
            $table->integer('tipo_pagamento')->default(1);
            $table->text('observacao')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paciente');
    }
}
