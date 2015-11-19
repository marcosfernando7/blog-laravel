@extends('template')

@section('conteudo')
	<h1>Todos Posts</h1>

<ul>
	@foreach($posts as $post)
		<h3><a href="show/{{$post->id}}">{{ $post->titulo }}</a></h3>
		<p>{{ $post->conteudo }}</p>
		<br>

	@endforeach	
</ul>
@stop