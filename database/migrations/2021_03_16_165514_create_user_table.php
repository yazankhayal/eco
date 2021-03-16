<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {

            $table->id();

            $table->string('name');

            $table->unsignedBigInteger('location_id');
            $table->unsignedBigInteger('dog_id');

            $table->foreign('dog_id')->references('id')->on('dog');
            $table->foreign('location_id')->references('id')->on('location');

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
        Schema::dropIfExists('user');
    }
}
