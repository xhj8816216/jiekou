<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appends', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content')->comment('帖子附言内容');
            $table->text('content_original')->nullable()->comment('附言原文');
            $table->integer('topic_id')->unsigned()->default(0)->index()->comment('帖子ID');
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
        Schema::dropIfExists('appends');
    }
}
