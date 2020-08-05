@extends('template')

@section('main')
<div id = 'mobil'>
	<center><b><h2>Tambah Data Koleksi Mobil</h2></b></center>

	{!! Form::open(['url' => 'mobil', 'files' => true]) !!}
		@include('mobil.form', ['submitButtonText' => 'Simpan'])
	{!! Form::close() !!}
</div>
@stop

@section('footer')
	@include('footer')
@stop
