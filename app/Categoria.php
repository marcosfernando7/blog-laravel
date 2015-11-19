<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id_categoria';
    protected $fillable = [
    	'nome'
    ];

    public function posts(){
    	return $this->hasMany('App\Posts', 'id_categoria');
    }
}
