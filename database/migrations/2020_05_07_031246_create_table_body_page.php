<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBodyPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bodyPage', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('hint');
            $table->string('title');
            $table->string('image');
            $table->unsignedBigInteger('categories_id');
//            $table->foreign('categories_id')->references('id')->on('blogCategories');
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
        Schema::dropIfExists('bodyPage');
    }
}
