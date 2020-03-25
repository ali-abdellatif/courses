<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('sub_categories', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 191);
			$table->integer('category_id')->unsigned();
			$table->string('video', 191);
		});
	}

	public function down()
	{
		Schema::drop('sub_categories');
	}
}