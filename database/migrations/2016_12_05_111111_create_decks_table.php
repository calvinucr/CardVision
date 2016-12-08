<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decks', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('class');
            $table->string('status');
            $table->string('permission');
            $table->integer('num_cards');
            $table->integer('card_1');
            $table->integer('card_2');
            $table->integer('card_3');
            $table->integer('card_4');
            $table->integer('card_5');
            $table->integer('card_6');
            $table->integer('card_7');
            $table->integer('card_8');
            $table->integer('card_9');
            $table->integer('card_10');
            $table->integer('card_11');
            $table->integer('card_12');
            $table->integer('card_13');
            $table->integer('card_14');
            $table->integer('card_15');
            $table->integer('card_16');
            $table->integer('card_17');
            $table->integer('card_18');
            $table->integer('card_19');
            $table->integer('card_20');
            $table->integer('card_21');
            $table->integer('card_22');
            $table->integer('card_23');
            $table->integer('card_24');
            $table->integer('card_25');
            $table->integer('card_26');
            $table->integer('card_27');
            $table->integer('card_28');
            $table->integer('card_29');
            $table->integer('card_30');
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
         Schema::dropIfExists('decks');
    }
}
