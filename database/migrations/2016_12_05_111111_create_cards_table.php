<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cards', function (Blueprint $table) {
			$table->charset = 'utf8';
			$table->collation = 'utf8_unicode_ci';
			$table->increments('id');
			$table->string('name');
			$table->string('creator');
			$table->string('status');
			$table->string('permission');
			$table->tinyInteger('class');
			$table->tinyInteger('cost');
			$table->tinyInteger('type');
			$table->string('description');
			$table->string('card_load');
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
		Schema::dropIfExists('cards');
	}
}
