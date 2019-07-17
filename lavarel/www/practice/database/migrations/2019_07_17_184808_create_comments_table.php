<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('comments', function(Blueprint $table) {
    $table->increments('id');
    $table->string('name', 20);
    $table->string('email', 30);
    $table->boolean('status');
    $table->integer('post_id')
        ->unsigned()
        ->index();
    $table->integer('reply_id')
        ->nullable();
    $table->text('comment');
    $table->string('ip', 20);
    $table->timestamps();

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
        Schema::dropIfExists('comments');
    }
}
