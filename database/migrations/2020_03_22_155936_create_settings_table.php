<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('commission', 191);
			$table->string('fb_link', 191);
			$table->string('tw_link', 191);
			$table->string('gmail_link', 191);
			$table->string('bank_account', 191);
			$table->string('bank_number', 191);
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}