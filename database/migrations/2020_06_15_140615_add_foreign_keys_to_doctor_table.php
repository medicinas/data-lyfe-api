<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDoctorTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('doctor', function(Blueprint $table)
		{
			$table->foreign('doc_localion', 'doctor_ibfk_1')->references('loc_id')->on('location')->onUpdate('NO ACTION')->onDelete('CASCADE');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('doctor', function(Blueprint $table)
		{
			$table->dropForeign('doctor_ibfk_1');
		});
	}
}
