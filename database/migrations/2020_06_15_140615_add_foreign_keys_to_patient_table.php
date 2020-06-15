<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPatientTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('patient', function(Blueprint $table)
		{
			$table->foreign('pa_doctor', 'patient_ibfk_1')->references('doc_id')->on('doctor')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('patient', function(Blueprint $table)
		{
			$table->dropForeign('patient_ibfk_1');
		});
	}
}
