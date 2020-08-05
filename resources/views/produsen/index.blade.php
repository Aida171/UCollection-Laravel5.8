@extends('template')

@section('main')
	<div id="produsen">
		<center><b><h2>Data Para Produsen</h2></b></center>

		@include('_partial.flash_message')

		@if(count($produsen_list) > 0)
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Perusahaan</th>
					<th>Lokasi</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tbody>
			<?php $i = 0; ?>
			<?php foreach($produsen_list as $produsen): ?>
			<tr>
				<td>{{ ++$i }}</td>
				<td>{{ $produsen->nama_produsen }}</td>
				<td>{{ $produsen->keterangan }}</td>

						<td>
							<div class="box-button">
								{{ link_to('produsen/' . $produsen->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
							</div>
							<div class="box-button">
								{!! Form::open(['method' => 'DELETE', 'action' => ['ProdusenController@destroy', $produsen->id]]) !!}
								{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
								{!! Form::close() !!}
							</div>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
		@else
		<p>Tidak ada data Para Produsen</p>
		@endif
		<div class="tombol-nav">
		<a href="produsen/create" class="btn btn-primary">
		Tambah Data Produsen</a>
	</div>
</div>
@stop

@section('footer')
	@include('footer')
@stop