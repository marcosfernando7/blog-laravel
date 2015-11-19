@extends('template')

@section('titulo')
	Todos Posts
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-pushpin"></span> Todos Posts</h1>
	
	<p>
		<a href="{{ route('admin.posts.create') }}" class="btn btn-success">
		<span class="glyphicon glyphicon-plus-sign"></span> Novo</a>
	</p>

	<table class="table table-striped table-hover">
		<tr>
			<th>Data de Criação</th>
			<th>Categoria</th>
			<th>Título</th>
			<th>Show</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>

		@foreach($posts as $post)
		<tr>

			<td>{{ $post->created_at }}</td>
			<td>{{ $post->categorias->nome }}</td>
			<td>{{ $post->titulo }}</td>
			<td><a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-eye-open"></span></a></td>
			
			<td><a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
			
			<td><a href="{{ route('admin.posts.destroy', $post->id) }}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
		</tr>
		@endforeach
	</table>

		{!! $posts->render() !!}
@stop