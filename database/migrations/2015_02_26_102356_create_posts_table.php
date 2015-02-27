<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('posts');

		Schema::create('posts', function($table){
			$table->increments('id');
			$table->string('title');
			$table->string('user_id')->unsigned()->index();;
			$table->string('body');
			$table->string('username');
			$table->timestamps();
			$table->timestamp('published_at');

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
