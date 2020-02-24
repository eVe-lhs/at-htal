<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrendingDressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trending_dress', function (Blueprint $table) {
            $table->bigIncrements('trending_dress_id');
            $table->unsignedBigInteger('dress_id');
            $table->foreign('dress_id')->references('dress_id')->on('dress');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trending_dress');
    }
}
