<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecursoPerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recurso_perfiles', function(Blueprint $table)
		{
			$table->increments('id');


			$table->integer('perfil_id')->unsigned();
			$table->integer('recurso_id')->unsigned();
			$table->integer('privilegio_id')->unsigned();
			//relaciones
			$table->foreign('perfil_id')->references('id')->on('perfiles');
			$table->foreign('recurso_id')->references('id')->on('recursos');
			$table->foreign('privilegio_id')->references('id')->on('privilegios');
			

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
		Schema::drop('recurso_perfiles');
	}

}
