<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_usuarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('usuario_id')->unsigned();
            $table->index('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->constrained()->onDelete('restrict')->onUpdate('cascade');
            $table->bigInteger('cargo_id')->unsigned();
            $table->index('cargo_id');
            $table->foreign('cargo_id')->references('id')->on('cargos')->constrained()->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargos_usuarios');
    }
}
