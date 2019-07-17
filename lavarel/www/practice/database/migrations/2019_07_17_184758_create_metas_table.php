<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('metas', function(Blueprint $table) {
    $table->increments('id');
    $table->integer('post_id')
        ->unsigned()
        ->index();
    $table->string('description');
    $table->string('keywords');

    $table->foreign('post_id')
        ->references('id')
        ->on('posts')
        ->onDelete('cascade');
});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas');
    }
}
