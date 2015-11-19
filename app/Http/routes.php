<?php


// Home Page
Route::get('/', ['as'=>'index', 'uses'=>'PostController@index']);
Route::get('show/{id}', ['as'=>'show', 'uses'=>'PostController@show']);
Route::get('show/', function(){
	return redirect()->route('index');
});


// Home Page in Admin
Route::get('admin/', ['as'=>'admin.index', 'uses'=>function(){
	return view('admin.index');
}]);


// Categorias
Route::get('admin/categorias/', ['as'=>'admin.categorias', 'uses'=>'CategoriaAdminController@index']);
Route::get('admin/categorias/{id}/show', ['as'=>'admin.categorias.show', 'uses'=>'CategoriaAdminController@show']);
Route::get('admin/categorias/{id}/destroy', ['as'=>'admin.categorias.destroy', 'uses'=>'CategoriaAdminController@destroy']);
Route::get('admin/categorias/create', ['as'=>'admin.categorias.create', 'uses'=>'CategoriaAdminController@create']);
Route::post('admin/categorias/store', ['as'=>'admin.categorias.store', 'uses'=>'CategoriaAdminController@store']);
Route::get('admin/categorias/{id}/edit', ['as'=>'admin.categorias.edit', 'uses'=>'CategoriaAdminController@edit']);
Route::put('admin/categorias/{id}/update', ['as'=>'admin.categorias.update', 'uses'=>'CategoriaAdminController@update']);


// Posts
Route::get('admin/posts/', ['as'=>'admin.posts', 'uses'=>'PostAdminController@index']);
Route::get('admin/posts/create', ['as'=>'admin.posts.create', 'uses'=>'PostAdminController@create']);
Route::get('admin/posts/show/{id}', ['as'=> 'admin.posts.show', 'uses'=>'PostAdminController@show']);
Route::post('admin/posts/store', ['as'=>'admin.posts.store', 'uses'=>'PostAdminController@store']);
Route::get('admin/posts/destroy/{id}', ['as'=>'admin.posts.destroy', 'uses'=>'PostAdminController@destroy']);
Route::get('admin/posts/edit/{id}', ['as'=>'admin.posts.edit', 'uses'=>'PostAdminController@edit']);
Route::put('admin/posts/update/{id}', ['as'=>'admin.posts.update', 'uses'=>'PostAdminController@update']);


// Comments
Route::get('admin/comentarios/create', ['as'=>'admin.comentarios.create', 'uses'=>'ComentarioAdminController@create']);
Route::post('admin/comentarios/store', ['as'=>'admin.comentarios.store', 'uses'=>'ComentarioAdminController@store']);
Route::get('admin/comentarios/', ['as'=>'admin.comentarios', 'uses'=>'ComentarioAdminController@index']);
Route::get('admin/comentarios/{id}/show', ['as'=> 'admin.comentarios.show', 'uses'=>'ComentarioAdminController@show']);
Route::get('admin/comentarios/{id}/edit', ['as'=>'admin.comentarios.edit', 'uses'=>'ComentarioAdminController@edit']);
Route::put('admin/comentarios/{id}/update', ['as'=>'admin.comentarios.update', 'uses'=>'ComentarioAdminController@update']);
Route::get('admin/comentarios/{id}/destroy', ['as'=>'admin.comentarios.destroy', 'uses'=>'ComentarioAdminController@destroy']);