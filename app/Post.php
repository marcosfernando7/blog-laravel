<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model{
    
    
    protected $fillable = [
    	'titulo',
    	'conteudo',
        'categoria_id'
    ];

    public function comentarios(){
    	return $this->hasMany('App\Comentario');
    }


    public function categorias(){
        return $this->belongsTo('App\Categoria', 'categoria_id');
    }

    public function tags(){
    	//pertence a muitos
    	return $this->belongsToMany('App\Tag', 'tags_posts');
    }

    public function getTagListAttribute(){
        $tags = $this->tags->lists('nome')->all();
        return implode(', ', $tags);
    }
}
