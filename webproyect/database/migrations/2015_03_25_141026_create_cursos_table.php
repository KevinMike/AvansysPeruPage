<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cursos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre',30);
			$table->longText('descripcion');
			$table->date('fecha_inicio');
			$table->string('duracion',50);
			$table->integer('costo');
			$table->string('frecuencia',100);
			$table->string('horario',100);
			$table->string('imagen_curso', 100);
			$table->string('logo', 100);
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
		Schema::drop('cursos');
	}

}
