<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comentario;
use App\Post;
use DB;


class ComentarioAdminController extends Controller
{

	public function create(){

		$posts = Post::lists('titulo', 'id');
         		return view('admin.comentarios.create')
					->with('posts', $posts);
    }


    public function store(Request $request){
    	Comentario::create($request->all());
        return redirect()->route('admin.comentarios');
    }


    public function index(){
    	$comentarios = DB::table('comentarios as c')
                        ->join('posts as p', 'p.id', '=', 'c.post_id')
                        ->select('titulo', 'c.created_at', 'c.id as id', 'comentario')   
                        ->orderBy('c.comentario')
                        ->paginate(10);
    	return view('admin.comentarios.index')
    			->with('comentarios', $comentarios);
    }


    public function show($id){
    	$comentarios = Comentario::find($id);
    	return view('admin.comentarios.show')
    			->with('comentarios', $comentarios);
    }


    public function edit($id){
        $posts = Post::lists('titulo', 'id');
        $comentarios = Comentario::find($id);
        return view('admin.comentarios.edit')
                ->with('comentarios', $comentarios)
                ->with('posts', $posts);
    }


    public function update(Request $request, $id){
        $comentarios = Comentario::find($id);
        $comentarios->update($request->all());

        return redirect()->route('admin.comentarios');
    }


    public function destroy($id){
        $comentarios = Comentario::find($id);
        $comentarios->delete();

        return redirect()->route('admin.comentarios');
    }
}
