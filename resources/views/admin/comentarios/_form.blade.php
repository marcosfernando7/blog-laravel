<div class="form-group">
	{!! Form::label('Selecione Post') !!}
	{!! Form::select('post_id', $posts, null, ['class'=>'form-control']) !!} 
</div>

<div class="form-group">
	{!! Form::label('Comentários') !!}
	{!! Form::textarea('comentario', null, ['class'=>'form-control']) !!}
</div>

<div class="row form-group">
	<div class="col-md-6">
		{!! Form::label('Nome') !!}
		{!! Form::text('nome', null, ['class'=>'form-control']) !!}
	</div>

	<div class="col-md-6">
		{!! Form::label('E-mail') !!}
		{!! Form::text('email', null, ['class'=>'form-control']) !!}
	</div>
</div>

<div class="form-group">
	
</div>
