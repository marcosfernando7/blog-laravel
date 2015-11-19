<?php

namespace App\Http\Controllers;

// importante validacao
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
// use App\Comentario;
use App\Categoria;
// use App\Http\Requests;
// use App\Http\Controllers\Controller;

class PostAdminController extends Controller{

	private $post;

	public function __construct(Post $post){
		$this->post = $post;
	}
    

    public function index(){
    	$posts = $this->post->with('categorias')->paginate(10);
    	return view('admin.posts.index')
                ->with('posts', $posts);
    }


    public function create(){
        $posts = new Post();
        $categorias = Categoria::lists('nome', 'id_categoria');
    	return view('admin.posts.create')
                ->with('posts', $posts)
                ->with('categorias', $categorias);
    }


    public function store(PostRequest $request){ 

        $posts = $this->post->create($request->all());
        $posts->tags()->sync($this->getTagsIds($request->tags));
    	return redirect('admin/posts');
    }


    public function show($id){
    	$posts = $this->post->find($id);
    	return view('admin.posts.show')->with('posts', $posts);
    }


    public function edit($id){
        $categorias = Categoria::lists('nome', 'id_categoria');
        $posts = $this->post->find($id);
        return view('admin.posts.edit')
                ->with('posts', $posts)
                ->with('categorias', $categorias);
    }


    public function destroy($id){
        // $posts = Post::find($id);
        // $posts->delete();
        $this->post->find($id)->delete();
        return redirect('admin/posts');
    }


    public function update(PostRequest $request, $id){
        $this->post->find($id)->update($request->all());
        $post = $this->post->find($id);
        $post->tags()->sync($this->getTagsIds($request->tags));
        return redirect()->route('admin.posts');
    }


    private function getTagsIds($tags){
        $tagList = array_filter(array_map('trim', explode(',', $tags)));
        $tagsId = [];

        foreach ($tagList as $tag) {
            $tagsId[] = Tag::firstOrCreate(['nome' => $tag])->id_tag;
        }

        return $tagsId;
    }
}
