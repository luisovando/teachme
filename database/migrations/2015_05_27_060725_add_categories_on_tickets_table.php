<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCategoriesOnTicketsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('tickets', function(Blueprint $table)
		{
			$table->enum('categories', ['Frontend', 'Backend']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('tickets', function(Blueprint $table)
		{
			$table->dropColumn('categories');
		});
	}

}
