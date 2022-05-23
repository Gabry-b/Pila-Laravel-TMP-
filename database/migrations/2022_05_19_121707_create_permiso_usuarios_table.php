<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermisoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permiso_usuarios', function (Blueprint $table) {
            $table->id();

            $table->timestamps();



            $table->unsignedBigInteger('rol_id')->unique()->nullable();

            $table->foreign('rol_id')
            ->references('id')
            ->on('rols')
            ->onDelete('set null');

            $table->unsignedBigInteger('permiso_id')->unique()->nullable();

            $table->foreign('permiso_id')
            ->references('id')
            ->on('permisos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permiso_usuarios');
    }
}
