<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->comment = 'Title';
            $table->string('name_secondary')->nullable()->comment = 'Secondary title';
            $table->string('slug');
            $table->text('short_text')->nullable();
            $table->text('long_text')->nullable();
            $table->string('featured_image')->nullable();
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->timestamp('publish_date')->nullable();
            $table->tinyInteger('featured')->default(0)->comment = ' 1 - featured, 0 - no featured';

            $table->integer('author_id')->unsigned()->nullable();
            $table->foreign('author_id')->references('id')->on('admins')->onDelete('set null');

            $table->integer('last_user_edit')->unsigned()->nullable();
            $table->foreign('last_user_edit')->references('id')->on('admins')->onDelete('set null');

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
        Schema::dropIfExists('news');
    }
}
