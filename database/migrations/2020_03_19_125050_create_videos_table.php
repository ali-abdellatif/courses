<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideosTable extends Migration {

	public function up()
	{
		Schema::create('videos', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 191);
			$table->string('video', 191);
			$table->integer('course_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('videos');
	}
}