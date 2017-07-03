<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::create('blog_posts', function (Blueprint $table) {
		    $table->increments('id');
		    $table->string('header');
		    $table->text('body');
		    $table->string('slug');
		    $table->string('category');
		    $table->integer('author_id');
		    $table->string('meta_title');
		    $table->string('meta_description');
		    $table->string('meta_keywords');
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
        //
    }
}
