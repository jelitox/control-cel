<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateConfiguracionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('configuraciones', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('clave');
			$table->string('valor');
			$table->integer('recurso_id')->unsigned();
			$table->foreign('recurso_id')->references('id')->on('recursos');
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
		Schema::drop('configuraciones');
	}

}
