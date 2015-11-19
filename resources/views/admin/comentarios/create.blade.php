@extends('template')

@section('titulo')
	Adicionar Comentário
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-comment"></span> Adicionar Comentário</h1>
	
	{!! Form::open(['route'=>'admin.comentarios.store', 'method'=>'post']) !!}
	
	@include('admin.comentarios._form')

	<div class="form-group">
		{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}		
	</div>
	 	

	{!! Form::close() !!} 
@stop