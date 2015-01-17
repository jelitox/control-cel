<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cedula',12);
			$table->string('rif',12)->nullable;
			$table->string('nombres');
			$table->string('apellidos');
			$table->string('telefonos')->nullable;
			$table->string('celular')->nullable;
			$table->string('sexo',1);
			$table->date('fecha_nacimiento');
			$table->text('direccion');
			$table->enum('estado_civil', ['soltero','casado','viudo','divorciado','concubino']);
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
		Schema::drop('personas');
	}

}
