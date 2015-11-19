@extends('template')

@section('titulo')
	Meu Blog em Laravel
@stop


@section('conteudo')

	    <div class="jumbotron">
	    		<h1>Meu Blog em Laravel</h1>
	    </div>


<ul>
	@foreach($posts as $post)
		<p>

			<span class="label label-primary">{{ data($post->created_at) }}</span>
			<h4>{{ $post->nome }}</h4>
			<h3><a href="show/{{$post->id}}-{{ str_slug($post->titulo) }}">{{ $post->titulo }}</a></h3>
		
		</p>
		<hr>

	@endforeach	

	{!! $posts->render() !!}
</ul>
@stop