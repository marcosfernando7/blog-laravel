<div class="form-group">
	{!! Form::label('Selecione a Categoria') !!}
	{!! Form::select('categoria_id', $categorias, null, ['class'=>'form-control']) !!} 
</div>

<div class="form-group">
	{{-- <div class="input-group"> --}}
		{!! Form::label('Título') !!}
		  {{-- <span class="input-group-addon" id="basic-addon1">@</span> --}}
		{!! Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'digite o título']) !!} 
	{{-- </div> --}}
</div>

<div class="form-group">
	{!! Form::label('Conteúdo') !!}
	{!! Form::textarea('conteudo', null, ['class'=>'form-control']) !!} 
</div>

<div class="form-group">
	{!! Form::label('Tags') !!}
	{!! Form::text('tags', $posts->TagList, ['class'=>'form-control']) !!}
</div>




<!--<div class="form-group">
	{!! Form::label('Categoria') !!}
	{!! Form::select('categoria', [
		'' => '-- selecione --',
		'eventos' => 'Eventos',
		'notícias' => 'Notícias'
		], 0, ['class'=>'form-control']) !!} 
</div>

<div class="form-group">	
	{!! Form::checkbox('tamanho', 'grande', null, ['id'=>'Grande']) !!}
	{!! Form::label('Grande') !!}
	<br>
	{!! Form::checkbox('tamanho', 'pequeno', null, ['id'=>'Pequeno']) !!}
	{!! Form::label('Pequeno') !!}
</div>

<div class="form-group">
	{!! Form::file('image') !!}
</div>-->