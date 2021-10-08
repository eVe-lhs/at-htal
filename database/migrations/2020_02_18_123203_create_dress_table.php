<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dress', function (Blueprint $table) {
            $table->bigIncrements('dress_id');
            $table->unsignedBigInteger('dress_type_id');
            $table->foreign('dress_type_id')->references('dress_type_id')->on('dress_type');
            //$table->string('dress_photo');
            $table->mediumText('dress_photo');
            $table->integer('price');
            $table->unsignedBigInteger('tailor_id');
            $table->foreign('tailor_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dress');
    }
}
