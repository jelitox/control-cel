<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recursos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('descripcion');
			$table->boolean('activo');
			$table->integer('recurso_id')->unsigned();
			$table->timestamps();
			//Recursividad de la tabla con el mismo
			$table->foreign('recurso_id')->references('id')->on('recursos');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('recursos');
	}

}
