<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');

            $table->integer('parent_id')->unsigned()->nullable();
            $table->foreign('parent_id')->references('id')->on('product_categories')->onDelete('set null');

            $table->integer('subparent_id')->unsigned()->nullable();
            $table->foreign('subparent_id')->references('id')->on('product_categories')->onDelete('set null');

            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable ();
            $table->string('seo_keywords')->nullable();
            $table->integer('order_num')->default(0);
            $table->tinyInteger('active')->default(0)->comment = '1 - active, 0 - inactive';
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
        Schema::dropIfExists('product_categories');
    }
}
