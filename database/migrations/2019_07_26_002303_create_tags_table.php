<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tag');
            $table->string('title');
            $table->string('subtitle');
            $table->string('page_image')->comment('标签图片');
            $table->string('meta_description')->comment('标签介绍');
            $table->string('layout')->default('blog.layouts.index')->comment('博客总归要使用的布局');
            $table->boolean('reverse_direction')->comment('在文章列表按时间升序排列博客文章（默认是降序）');
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
        Schema::dropIfExists('tags');
    }
}
