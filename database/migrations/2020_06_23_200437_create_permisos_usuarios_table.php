<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisosUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permisos_usuarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('permiso_id')->unsigned();
            $table->index('permiso_id');
            $table->foreign('permiso_id')->references('id')->on('permisos')->constrained()->onDelete('restrict')->onUpdate('cascade');
            $table->bigInteger('usuario_id')->unsigned();
            $table->index('usuario_id');
            $table->foreign('usuario_id')->references('id')->on('users')->constrained()->onDelete('restrict')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permisos_usuarios');
    }
}
