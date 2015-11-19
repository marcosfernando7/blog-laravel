@extends('template')

@section('titulo')
	Cadastrar Categoria
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-comment"></span> Cadastrar Categoria</h1>

	{{-- validacao --}}
	@include('validate')
	
	{!! Form::open(['route'=>'admin.categorias.store', 'method'=>'post']) !!}
	
	@include('admin.categorias._form')

	{!! Form::submit('Salvar', ['class'=>'btn btn-success']) !!}
	
	{!! Form::close() !!}
@stop