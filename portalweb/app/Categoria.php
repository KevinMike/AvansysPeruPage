<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{

    public $table = "categorias";

    public function fotos_item()
    {
        return $this->hasMany('App\Foto');
    }
}
