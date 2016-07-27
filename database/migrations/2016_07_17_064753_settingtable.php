<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Settingtable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->string('phone');
            $table->string('email');
            $table->string('office_time');
            $table->string('location');
            $table->string('copyright');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkind');
            $table->string('google');
            $table->string('aboutus');
            $table->string('createdby');
            $table->string('image');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('setting');
    }
}
