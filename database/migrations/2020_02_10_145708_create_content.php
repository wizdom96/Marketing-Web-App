<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('content', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('make');
            $table->string('model');
            $table->string('title');
            $table->string('description');
            $table->string('phone');
            $table->string('year');
            $table->string('city');
            $table->integer('price');
            $table->string('power');
            $table->string('transmission');
            $table->string('fuel');
            $table->string('km');
            $table->string('type');
            $table->integer('approved')->default(0);
            $table->integer('sponsored')->default(1);
            $table->string('user_id');
            $table->rememberToken();
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
        Schema::dropIfExists('content');
    }
}
