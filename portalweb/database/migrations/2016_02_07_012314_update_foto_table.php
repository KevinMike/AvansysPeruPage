<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateFotoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('fotos',function($table){
			$table->integer('categoria')->unsigned();
			$table->foreign('categoria')->references('id')->on('categorias');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('fotos',function($table){
			$table->dropForeign('fotos_categoria_foreign');
			$table->dropColumn('categoria');

		});
	}

}
