@extends('template')

@section('titulo')
	Todas Categorias
@stop

@section('conteudo')

@include('nav')

	<h1><span class="glyphicon glyphicon-comment"></span> Todas Categorias</h1>
	
	<p>
		<a href="{{ route('admin.categorias.create') }}" class="btn btn-success">
		<span class="glyphicon glyphicon-plus-sign"></span> Novo</a>
	</p>

	<table class="table table-striped table-hover">
		<tr>
			<th>Categoria</th>
			<th>Publicado em </th>
			<th>Show</th>
			<th>Editar</th>
			<th>Excluir</th>
		</tr>
		
		@foreach($categorias as $categoria)
			<tr>
				<td>{{ $categoria->nome }}</td>
				<td>{{ date('d/m/Y H:i:s', strtotime($categoria->created_at)) }}</td>
				<td><a href="{{ route('admin.categorias.show', $categoria->id_categoria) }}" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-eye-open"></span></a></td>

				<td><a href="{{ route('admin.categorias.edit', $categoria->id_categoria) }}" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-edit"></span></a></td>

				<td><a href="{{ route('admin.categorias.destroy', $categoria->id_categoria) }}" class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-trash"></span></a></td>
			</tr>
		@endforeach
	</table>	

		{!! $categorias->render() !!}
@stop