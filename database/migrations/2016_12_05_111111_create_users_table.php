<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateUsersTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function (Blueprint $table) {
			$table->charset = 'utf8';
			$table->collation = 'utf8_unicode_ci';
			$table->increments('id');
			$table->string('username')->unique();
			$table->string('email')->unique();
			$table->string('password');
			$table->string('permission')->nullable()->default(null);
			$table->integer('deck_1')->unsigned()->references('id')->on('decks')->onDelete('cascade')->nullable()->default(null);
			$table->integer('deck_2')->unsigned()->references('id')->on('decks')->onDelete('cascade')->nullable()->default(null);
			$table->integer('deck_3')->unsigned()->references('id')->on('decks')->onDelete('cascade')->nullable()->default(null);
			$table->integer('cards_published')->default(0);
			$table->integer('card_likes')->default(0);
			$table->integer('post_likes')->default(0);
			$table->integer('game_played')->default(0);
			$table->integer('victories')->default(0);
			$table->rememberToken();
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
		Schema::dropIfExists('users');
	}
}