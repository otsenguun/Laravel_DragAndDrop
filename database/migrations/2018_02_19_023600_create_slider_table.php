<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('con_id')->unsigned()->nullable();
            $table->string('image')->nullable();
            $table->integer('counts')->nullable();
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
         Schema::table('slider', function (Blueprint $table) {
             $table->dropForeign('theme_con_id_foreign');
            });

        Schema::dropIfExists('slider');
    }
}
