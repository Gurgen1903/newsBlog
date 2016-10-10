<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('translates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('translate_paragraph_english');
            $table->text('translate_article_english');
            $table->string('translate_paragraph_russian');
            $table->text('translate_article_russian');
            $table->string('translate_paragraph_armenian');
            $table->text('translate_article_armenian');
            $table->timestamps();
            $table->integer('news_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('translates');
    }
}
