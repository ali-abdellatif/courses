<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEventsTable extends Migration {

	public function up()
	{
		Schema::create('events', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('image', 191);
			$table->string('title', 191);
			$table->integer('course_id')->unsigned();
			$table->date('start_date');
			$table->text('description');
		});
	}

	public function down()
	{
		Schema::drop('events');
	}
}