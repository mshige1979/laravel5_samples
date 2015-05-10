<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// 新規作成
        Schema::create('articles', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('body');
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
		// 削除
        Schema::drop('articles');
	}

}
