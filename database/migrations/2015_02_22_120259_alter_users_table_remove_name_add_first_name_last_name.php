<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableRemoveNameAddFirstNameLastName extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table){
			$table->dropColumn('name');
			$table->string('first_name', 50)->after('id');
			$table->string('last_name', 50)->after('first_name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table){
			$table->dropColumn('last_name');
			$table->dropColumn('first_name');
			$table->string('name')->after('id');
		});
	}

}
