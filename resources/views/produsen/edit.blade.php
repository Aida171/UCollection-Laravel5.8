@extends('template')


@section('main')
	<div id="produsen">
		<center><b><h2>Edit Data Produsen</h2>

		{!! Form::model($produsen, ['method' => 'PATCH', 'action' => ['ProdusenController@update', $produsen->id]]) !!}
			@include('produsen.form', ['submitButtonText' => 'Update'])
		{!! Form::close() !!}

	</div>
@stop

@section('footer')
	@include('footer')
@stop