@extends('template')

@section('titulo')
	Editar Comentário
@stop

@section('conteudo')

@include('nav')

{!! Form::model($comentarios, ['route'=>['admin.comentarios.update', $comentarios->id], 'method'=>'put']) !!}

@include('admin.comentarios._form')

{!! Form::submit('Alterar', ['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}

@stop