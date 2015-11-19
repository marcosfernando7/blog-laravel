@extends('template')

@section('titulo')
	Editar Categoria
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-comment"></span> Editar Categoria</h1>

	{{-- validacao --}}
	@include('validate')
	
{!! Form::model($categorias, ['route'=>['admin.categorias.update', $categorias->id_categoria], 'method'=>'put']) !!}

	
	@include('admin.categorias._form')

	{!! Form::submit('Alterar', ['class'=>'btn btn-primary']) !!}
	
	{!! Form::close() !!}
@stop