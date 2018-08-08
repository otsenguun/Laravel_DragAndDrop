<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('parent_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('parent_id')->references('id')->on('conversation')->onDelete('set null')->onUpdate('CASCADE');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('theme', function (Blueprint $table) {
             $table->dropForeign('theme_parent_id_foreign');
            });
        Schema::dropIfExists('theme');
    }
}
