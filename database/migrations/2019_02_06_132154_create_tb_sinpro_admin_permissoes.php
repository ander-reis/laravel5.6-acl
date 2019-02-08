<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbSinproAdminPermissoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_sinpro_admin_permissoes', function (Blueprint $table) {
            $table->increments('id_usuario');
            $table->integer('id_pagina');
            $table->char('fl_consulta', 1)->default('S');
            $table->char('fl_cadastro', 1)->default('S');
            $table->char('fl_alteracao', 1)->default('S');
            $table->char('fl_exclusao', 1)->default('S');
            $table->dateTime('dt_criacao')->default(\Carbon\Carbon::now());
            $table->dateTime('dt_alteracao')->default(\Carbon\Carbon::now());
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_sinpro_admin_permissoes');
    }
}
