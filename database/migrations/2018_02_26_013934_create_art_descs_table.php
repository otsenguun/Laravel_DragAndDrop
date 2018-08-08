<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArtDescsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_descs', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('desc')->nullable();
            $table->integer('art_id')->unsigned()->nullable();
            $table->foreign('art_id')->references('id')->on('arts')->onDelete('set null')->onUpdate('CASCADE');
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
         Schema::table('art_descs', function (Blueprint $table) {
             $table->dropForeign('art_descs_art_id_foreign');
            });
        Schema::dropIfExists('art_descs');
    }
}
