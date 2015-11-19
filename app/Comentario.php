<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model{

    protected $table = 'comentarios';

    protected $fillable = [
    	'comentario',
    	'nome',
    	'email',
    	'post_id'
    ];

    public function posts(){
    	// pertence a
    	return $this->belongsTo('App\Post', 'post_id');
    }


}
