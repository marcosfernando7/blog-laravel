@extends('template')

@section('conteudo')

	<h1>{{ $posts->titulo }}</h1>
	
	<p>{{ $posts->conteudo }}</p>
	
	<p><strong>Tags: </strong> 
		<ul>
			@foreach($posts->tags as $tag)
				<li>{{ $tag->nome }}</li>
			@endforeach
		</ul>

	</p>

	@if(count($posts->comentarios) >= 1)

		<h3>Comentários</h3>

		@foreach($posts->comentarios as $comentario)
			<p>id: {{ $comentario->post_id }}</p>
			<p>id: {{ $comentario->id }}</p>
			<p>Nome: {{ $comentario->nome }}</p>
			<p>Comentário: {{ $comentario->comentario }}</p>
			<p>E-mail: {{$comentario->email }}</p>
			<hr>
		@endforeach

	@else
	  <div class="alert alert-danger">Ops nenhum comentário!</div>
	@endif

	<a href="../">Todos Posts</a>

@stop
	
