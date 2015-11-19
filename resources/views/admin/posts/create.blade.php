@extends('template')

@section('titulo')
	Adicionar Post
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-pushpin"></span>Adicionar Post</h1>

	{{-- validacao --}}
	@extends('validate')
	
	{!! Form::open(['route'=>'admin.posts.store', 'method'=>'post']) !!}
	
	
	@include('admin.posts._form')

	<div class="form-group">
		{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}		
	</div>
	 	

	{!! Form::close() !!} 
@stop