<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGliphsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gliphs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('name');
            $table->string('latin');
            $table->string('ciril');
            $table->timestamps();
            $table->string('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gliphs');
    }
}
