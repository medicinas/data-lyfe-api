<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToRecordPacTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('record_pac', function(Blueprint $table)
		{
			$table->foreign('rec_patient', 'record_pac_ibfk_1')->references('pa_id')->on('patient')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('record_pac', function(Blueprint $table)
		{
			$table->dropForeign('record_pac_ibfk_1');
		});
	}
}
