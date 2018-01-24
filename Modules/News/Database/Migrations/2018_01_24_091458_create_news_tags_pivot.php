<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTagsPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_tags_pivot', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('article_id')->unsigned()->nullable();
            $table->foreign('article_id')->references('id')->on('news')->onDelete('cascade');

            $table->integer('news_tag_id')->unsigned()->nullable();
            $table->foreign('news_tag_id')->references('id')->on('news_tags')->onDelete('cascade');

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
        Schema::dropIfExists('news_tags_pivot');
    }
}
