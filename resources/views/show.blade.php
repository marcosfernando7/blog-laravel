@extends('template')


@section('conteudo')

<h1>{{ $posts->titulo }}</h1>

<p>
	<em>Data de postagem: {{ data($posts->created_at) }}</em>
</p>

<p>{{ $posts->conteudo }}</p>

<hr>

<strong>Tags</strong>
<ul>
@foreach($posts->tags as $tag)
	
	<li>{{ $tag->nome }}</li>

@endforeach
</ul>



@stop