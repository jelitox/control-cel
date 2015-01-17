<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->string('login',20);
			$table->string('password');						
			$table->timestamp('lastlogon');
			$table->date('fecha_inactivo');
			$table->string('email',80);
			$table->integer('intentos');
			$table->string('remember_token')->nullable();
			$table->integer('estado_usuario_id')->unsigned();
			$table->integer('persona_id')->unsigned();
			$table->integer('perfil_id')->unsigned();
			$table->integer('empresa_id')->unsigned();
			$table->boolean('activo');
			//************ relaciones *******************//
			$table->foreign('persona_id')->references('id')->on('personas');
			$table->foreign('perfil_id')->references('id')->on('perfiles');
			$table->foreign('estado_usuario_id')->references('id')->on('estado_usuarios');
			$table->foreign('empresa_id')->references('id')->on('empresas');
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
		Schema::drop('usuarios');
	}

}
