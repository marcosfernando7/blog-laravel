@extends('template')

@section('titulo')
	
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-comment"></span> Categoria: {{ $categorias->nome }}</h1>
	
	
@stop