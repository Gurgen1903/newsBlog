<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategorisTable extends Migration
{
    /**
     * ??????? ??????? 'categoris' ??? ???????????? ????????? ????????.
     */
    public function up()
    {
        Schema::create('categoris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categories_in_english');
            $table->string('categories_in_russian');
            $table->string('categories_in_armenian');
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
        Schema::dropIfExists('categoris');
    }
}
