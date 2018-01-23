<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCategoriesPivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_categories_pivot', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('article_id')->unsigned()->nullable();
          $table->foreign('article_id')->references('id')->on('news')->onDelete('cascade');

          $table->integer('category_id')->unsigned()->nullable();
          $table->foreign('category_id')->references('id')->on('news_categories')->onDelete('cascade');

          $table->integer('order_num')->default(0);
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
        Schema::dropIfExists('news_categories_pivot');
    }
}
