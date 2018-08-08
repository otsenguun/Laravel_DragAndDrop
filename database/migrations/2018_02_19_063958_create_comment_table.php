<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('content')->nullable();
            $table->integer('con_id')->unsigned()->nullable();
            $table->foreign('con_id')->references('id')->on('conversation')->onDelete('set null')->onUpdate('CASCADE');
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
        Schema::table('comment', function (Blueprint $table) {
             $table->dropForeign('comment_con_id_foreign');
            });
        Schema::dropIfExists('comment');
    }
}
