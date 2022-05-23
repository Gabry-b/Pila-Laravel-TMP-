<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactas', function (Blueprint $table) {
            $table->id();

            $table->string('nombre', 45);
            $table->string('apellidos');
            $table->string('numerodetelefono', 12)->unique();
            $table->string('emaIl', 45)->unique();
            $table->string('direccion');
            $table->text('mensaje');

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
        Schema::dropIfExists('contactas');
    }
}
