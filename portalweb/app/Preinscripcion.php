<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Preinscripcion extends Model {

	public $table = "preinscripciones";
	public function curso_id()
	{
		return $this->belongsTo('App\Curso','curso');
	}
}
