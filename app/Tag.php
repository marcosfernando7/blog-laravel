<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model{

	protected $table = 'tags';
	protected $primaryKey = 'id_tag';

    protected $fillable = [
    	'nome'
    ];


    public function tags(){
    	//pertence a muitos
    	return $this->belongsToMany('App\Post', 'tags_posts');
    }
}
