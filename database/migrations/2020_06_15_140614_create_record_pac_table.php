<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecordPacTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('record_pac', function(Blueprint $table)
		{
			$table->integer('rec_id')->primary();
			$table->integer('rec_patient')->index('rec_patient');
			$table->string('rec_description', 50);
			$table->string('rec_date_enrollment', 50);
			$table->string('rec_date_reenrollment', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('record_pac');
	}
}
