@extends('template')


@section('main')
	<div id="produsen">
		<center><b><h2>Tambah Daftar Produsen</h2></b></center>

		{!! Form::open(['url' => 'produsen']) !!}
		@include('produsen.form', ['submitButtonText' => 'Simpan'])
		{!! Form::close() !!}
		
	</div>
@stop

@section('footer')
	@include('footer')
@stop