@extends('template')

@section('main')
<div id = 'mobil'>
	<center><b><h2>Edit Data Koleksi Mobil</h2></b></center>

	{!! Form::model($mobil, ['method' => 'PATCH', 'files' => true, 'action' => ['MobilController@update', $mobil->id]]) !!}
  	@include('mobil.form', ['submitButtonText' => 'Update'])
  	{!! Form::close() !!}
  	
</div>
@stop

@section('footer')
	@include('footer')
@stop
