<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table) {
    $table->increments('id');
    $table->string('name', 50);
    $table->string('slug', 50)
        ->unique();
    $table->boolean('publish');
    $table->string('image')
        ->nullable();
    $table->integer('category_id');
    $table->string('preview_text');
    $table->text('detail_text');
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
        Schema::dropIfExists('posts');
    }
}
