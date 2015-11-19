@extends('template')

@section('conteudo')

@include('nav')
	
		<h3>Comentário: {{ $comentarios->comentario }}</h3>

		<p><strong>Nome :</strong> {{ $comentarios->nome }}</p>
		<p><strong>E-mail: </strong> {{ $comentarios->email }}</p>
	
	<a href="../">Voltar</a>

@stop