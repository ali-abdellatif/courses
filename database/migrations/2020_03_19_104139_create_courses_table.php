<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCoursesTable extends Migration {

	public function up()
	{
		Schema::create('courses', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 191);
			$table->string('price', 191);
			$table->date('start_date');
			$table->date('end_date');
			$table->integer('sub_category_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('courses');
	}
}