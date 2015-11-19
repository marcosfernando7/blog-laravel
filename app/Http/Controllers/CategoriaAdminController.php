<?php

namespace App\Http\Controllers;

// importante validacao
use App\Http\Requests\CategoriaRequest;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Categoria;

class CategoriaAdminController extends Controller
{

    public function index()
    {
        $categorias = Categoria::select('id_categoria', 'nome', 'created_at')
                    ->orderBy('nome')
                    ->paginate(10);

        return view('admin.categorias.index')
                ->with('categorias', $categorias);
    }


    public function create(){
        return view('admin.categorias.create');
    }


    public function store(CategoriaRequest $request)
    {
        Categoria::create($request->all());
        return redirect()->route('admin.categorias');
    }


    public function show($id){
        $categorias = Categoria::select('nome')
                    ->find($id);
        return view('admin.categorias.show')
                ->with('categorias', $categorias);
    }


    public function edit($id){
        $categorias = Categoria::find($id);
        return view('admin.categorias.edit')
                ->with('categorias', $categorias);        
    }


    public function update(CategoriaRequest $request, $id)
    {
       $categorias = Categoria::find($id);
       $categorias->update($request->all());
       return redirect()->route('admin.categorias');
    }


    public function destroy($id){
        $categorias = Categoria::find($id);
        $categorias->delete();

        return redirect()->route('admin.categorias');
        
    }
}
