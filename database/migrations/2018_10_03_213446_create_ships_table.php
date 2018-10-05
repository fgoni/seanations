<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ships', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');
            $table->integer('hull');
            $table->integer('cargo');
            $table->integer('crew');
            $table->integer('speed');
            $table->integer('cannons');
            $table->integer('price');
            $table->integer('build_time');
            $table->boolean('is_black')->default(false);

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
        Schema::dropIfExists('ships');
    }
}
