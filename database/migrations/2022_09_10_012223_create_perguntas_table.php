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
        Schema::create('perguntas', function (Blueprint $table) {
			$table->increments('id');
            $table->integer('id_users')->unsigned()->nullable();
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('titulo')->nullable();
            $table->longtext('pergunta')->nullable();
            $table->string('image')->nullable();
            $table->string('resposta1')->nullable();
            $table->string('resposta2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perguntas');
    }
};
