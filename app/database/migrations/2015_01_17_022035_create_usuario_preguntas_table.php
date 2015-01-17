<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioPreguntasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario_preguntas', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('usuario_id')->unsigned();
			$table->integer('pregunta_id')->unsigned();
			//relaciones
			$table->foreign('usuario_id')->references('id')->on('usuarios');
			$table->foreign('pregunta_id')->references('id')->on('preguntas');
			
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
		Schema::drop('usuario_preguntas');
	}

}
