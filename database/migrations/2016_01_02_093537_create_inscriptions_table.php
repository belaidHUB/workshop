<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateinscriptionsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inscriptions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nom');
			$table->string('prenom');
			$table->string('tel');
			$table->string('email');
			$table->string('etablissement');
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
		Schema::drop('inscriptions');
	}

}
