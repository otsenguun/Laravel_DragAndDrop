<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConversationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conversation', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('image')->nullable();
            $table->string('author')->nullable();
            $table->longText('desc')->nullable();
            $table->longText('desc2')->nullable();
            $table->integer('imagestyle')->nullable();
            $table->string('type')->nullable();
            $table->integer('poster_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('poster_id')->references('id')->on('users')->onDelete('set null')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('conversation', function (Blueprint $table) {
             $table->dropForeign('conversation_poster_id_foreign');
            });
        Schema::dropIfExists('conversation');
    }
}
