<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableAnimais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_animais', function (Blueprint $table) {
            $table->id();
            $table->string('nome',128);
            $table->integer('idade');
            $table->string('raça',128);
            $table->string('peso',100);
            $table->string('dono',128);
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
        Schema::dropIfExists('table_animais');
    }
}
