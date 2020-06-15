<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('patient', function(Blueprint $table)
		{
			$table->integer('pa_id')->primary();
			$table->integer('pa_doctor')->index('pa_doctor');
			$table->string('pa_email', 50);
			$table->string('pa_name', 50);
			$table->string('pa_last_p', 50);
			$table->string('pa_last_m', 50);
			$table->string('pa_status', 30);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('patient');
	}
}
