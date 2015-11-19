@extends('template')

@section('conteudo')

@include('nav')

	<h1>{{ $posts->titulo }}</h1>

	<p>{{ $posts->conteudo }}</p>

	
	<a href="../">Voltar</a>

@stop