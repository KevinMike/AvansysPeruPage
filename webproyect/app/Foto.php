<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model {
	protected $fillable = array('foto','descripcion');
	public function categoria_item(){
		return $this->belongsTo('App\Categoria','categoria','id');
	}
}
