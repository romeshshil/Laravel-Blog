<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('blog_title');
            $table->integer('category_id');
            $table->integer('comment_id');
            $table->string('photo');
            $table->string('desc',1024);
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
        Schema::drop('post');
    }
}
