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
            $table->integer('grupo')->nullable();
            $table->string('titulo')->nullable();
            $table->longtext('pergunta')->nullable();
            $table->string('image')->nullable();
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
