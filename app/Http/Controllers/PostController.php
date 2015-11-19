<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categoria;
use App\Post;
use App\Http\Controllers\Controller;
use DB;

class PostController extends Controller
{

    public function index(){
        $posts = DB::table('posts as p')
        		->join('categorias as c', 'p.categoria_id', '=', 'c.id_categoria')
        		->select('p.created_at', 'c.nome', 'p.titulo', 'p.id')
        		->orderBy('p.created_at', 'DESC')
        		->paginate(5);

        // dd($posts);

        return view('index')->with('posts', $posts);
    }

    public function show($id){
        $posts = Post::find($id);

        return view('show')->with('posts', $posts);
    }
}
