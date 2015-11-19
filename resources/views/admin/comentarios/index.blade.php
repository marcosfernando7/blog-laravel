@extends('template')

@section('titulo')
	Todos Comentários
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-comment"></span> Todos Comentários</h1>
	
	<p>
		<a href="{{ route('admin.comentarios.create') }}" class="btn btn-success">
		<span class="glyphicon glyphicon-plus-sign"></span> Novo</a>
	</p>

	<table class="table table-striped table-hover">
		<tr>
			<th>Post</th>
			<th>Publicado em </th>
			<th>Comentário</th>
			<th>Show</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>

		@foreach($comentarios as $comentario)
		<tr>
			<td>{{ $comentario->titulo }}</td>
			<td>{{ data($comentario->created_at) }}</td>
			<td>{{ $comentario->comentario }}</td>
			<td><a href="{{ route('admin.comentarios.show', $comentario->id) }}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-eye-open"></span></a></td>
			
			<td><a href="{{ route('admin.comentarios.edit', $comentario->id) }}" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-pencil"></span></a></td>
			
			<td><a href="{{ route('admin.comentarios.destroy', $comentario->id) }}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
		</tr>
		@endforeach
	</table>

		{!! $comentarios->render() !!}
@stop