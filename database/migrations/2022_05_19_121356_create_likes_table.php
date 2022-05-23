<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();

            $table->timestamps();


            


            $table->unsignedBigInteger('comentario_id')->unique()->nullable();

            $table->foreign('comentario_id')
            ->references('id')
            ->on('comentarios')
            ->onDelete('set null');


            $table->unsignedBigInteger('user_id')->unique()->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users');

        
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('likes');
    }
}
