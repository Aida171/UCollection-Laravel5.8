@extends('template')

@section('main')
<div id='mobil'>
	<h2>Detail Koleksi Mobil</h2>

		<table class="table table-striped ">
			<tr>
				<th>No Mobil</th>
				<td>{{ $mobil->id_mobil }}</td>
			</tr>

			<tr>
				<th>Nama</th>
				<td>{{ $mobil->nama_mobil }}</td>
			</tr>

			<tr>
				<th>Nama Produsen</th>
				<td>{{ $mobil->produsen->nama_produsen }}</td>
			</tr>

			<tr>
				<th>Harga Jual</th>
				<td>{{ $mobil->harga }}</td>
			</tr>

			<tr>
				<th>Tahun Produksi</th>
				<td>{{ $mobil->tahun }}</td>
			</tr>

			<tr>
				<th>Foto</th>
				<td>
					@if (isset($mobil->foto))
					<img src="{{ asset('fotoupload/' .$mobil->foto) }}">
					@else
					<img src="{{ asset('fotoupload/dummydress.png') }}">
					@endif
				</td>
			</tr>
		</table>
	</div>
@stop

@section('footer')
	@include('footer')
@stop