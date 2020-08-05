@extends('template')

@section('main')
<div id ='mobil'>
	<center><b><h2>Koleksi Mobil Klasik</h2></b></center>

	@include('_partial.flash_message')
	
	@if (!empty($mobil_list))
	<table class="table table-striped ">
		<thead>
			<tr>
				<th>No Mobil</th>
				<th>Mobil</th>
				<th>Nama Produsen</th>
				<th>Harga Jual</th>
				<th>Tahun Produksi</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($mobil_list as $mobil)
			<tr>
				<td>{{ $mobil->id_mobil }}</td>
				<td>{{ $mobil->nama_mobil }}</td>
				<td>{{ $mobil->produsen->nama_produsen }}</td>
				<td>{{ $mobil->harga }}</td>
				<td>{{ $mobil->tahun }}</td>

				<td>
					<div class="box-button">
						{{ link_to('mobil/' . $mobil->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
					</div>
					<div class="box-button">
						{{ link_to('mobil/' . $mobil->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
					</div>
					<div class="box-button">
						{!! Form::open(['method' => 'DELETE', 'action' => ['MobilController@destroy', $mobil->id]]) !!}
						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
						{!! Form::close() !!}
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	@else
	<p>Tidak ada data Mobil dalam halaman ini.</p>
	@endif

	<div class="table-nav">
	<div class="jumlah-data">
		<strong>Jumlah Mobil : {{ $jumlah_mobil }}</strong>
	</div>
	<div class="paging">
		{{ $mobil_list->links() }}
	</div>

	</div>

	<div class="tombol-nav">
		<a href="{{ url('mobil/create') }}" class="btn btn-primary">
		Tambah Data Koleksi Mobil</a>
	</div>
</div>

@stop

@section('footer')
	@include('footer')
@stop
