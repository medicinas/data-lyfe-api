<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('doctor', function(Blueprint $table)
		{
			$table->integer('doc_id')->primary();
			$table->integer('doc_localion')->index('doc_localion');
			$table->string('doc_email', 50);
			$table->string('doc_name', 50);
			$table->string('doc_last_p', 50);
			$table->string('doc_last_m', 50);
			$table->string('doc_status', 30);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('doctor');
	}
}
