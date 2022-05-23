<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->id();
            
            $table->string('nombre', 45);
            $table->text('biografia')->nullable();
            $table->string('direccioN')->nullable();
            $table->string('telefono')->nullable();
            $table->string('interesadoen')->nullable();
            $table->date('fecha_nacimiento')->nullable();
            $table->string('imagen_fondo')->nullable();
            $table->string('imagen_perfil')->nullable();
            $table->timestamps();

            $table->unsignedBigInteger('user_id')->unique()->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfils');
    }
}
