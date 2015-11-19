@extends('template')

@section('titulo')
	Editar Post
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-pushpin"></span>Editar Post: {{ $posts->titulo }}</h1>

	{{-- validacao --}}
	@include('validate')
	
	{!! Form::model($posts, ['route'=>['admin.posts.update', $posts->id], 'method'=>'put']) !!}
	
	@include('admin.posts._form')

	<div class="form-group">
		{!! Form::submit('Alterar', ['class'=>'btn btn-primary']) !!}		
	</div>
	 	

	{!! Form::close() !!} 
@stop