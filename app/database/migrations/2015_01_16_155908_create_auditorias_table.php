<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAuditoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('auditorias', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('new_data');
			$table->integer('evento_id')->unsigned();
			$table->integer('recurso_id')->unsigned();
			$table->integer('ejecutante')->unsigned();
			// relaciones
			$table->foreign('evento_id')->references('id')->on('eventos');
			$table->foreign('recursos_id')->references('id')->on('recursos');
			//$table->foreign('ejecutante')->references('id')->on('usuarios');
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
		Schema::drop('auditorias');
	}

}
