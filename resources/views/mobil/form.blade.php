@if (isset($mobil))
	{!! Form::hidden('id', $mobil->id) !!}
@endif


<!-- ID mobil -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('id_mobil') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('id_mobil', 'No Mobil :', ['class' => 'control-label']) !!}
	{!! Form::text('id_mobil', null, ['class' => 'form-control']) !!}
	@if ($errors->has('id_mobil'))
	<span class="help-block">
		{{ $errors->first('id_mobil') }}
	</span>
	@endif
</div>


<!-- Nama Mobil -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('nama_mobil') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('nama_mobil', 'Mobil :', ['class' => 'control-label']) !!}
	{!! Form::text('nama_mobil', null, ['class' => 'form-control']) !!}
	@if ($errors->has('nama_mobil'))
	<span class="help-block">
		{{ $errors->first('nama_mobil') }}
	</span>
	@endif
</div>


<!-- Produsen Mobil -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('id_produsen') ?
		'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif
	{!! Form::label('id_produsen', 'Nama Produsen :', ['class' => 'control-label']) !!}
	@if(count($list_produsen) > 0)
	{!! Form::select('id_produsen', $list_produsen, null, ['class' => 'form-control', 'id' => 'id_produsen',
	'placeholder' => 'Pilih Nama Produsen']) !!}
	@else
		<p>Tidak ada pilihan Daftar Nama Produsen, Silahkan buat terlebih dahulu</p>
	@endif
	@if ($errors->has('id_produsen'))
	<span class="help-block">{{ $errors->first('id_produsen') }}</span>
	@endif
	</div>


<!-- Harga Mobil -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('harga') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('harga', 'Harga Jual Pasaran :', ['class' => 'control-label']) !!}
	{!! Form::text('harga', null, ['class' => 'form-control']) !!}
	@if ($errors->has('harga'))
	<span class="help-block">
		{{ $errors->first('harga') }}
	</span>
	@endif
</div>


<!-- Tahun Produksi -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('tahun') ?
	'has-error' : 'has-success' }}"> 
@else
	<div class="form-group">
@endif
	{!! Form::label('tahun', 'Tahun Produksi :', ['class' => 'control-label']) !!}
	{!! Form::text('tahun', null, ['class' => 'form-control']) !!}
	@if ($errors->has('tahun'))
	<span class="help-block">
		{{ $errors->first('tahun') }}
	</span>
	@endif
</div>


<!-- Foto -->
@if ($errors->any())
<div class="form-group {{ $errors->has('foto') ? 
	'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
    {!! Form::label('foto', 'Foto :') !!}
    {!! Form::file('foto') !!}
    @if ($errors->has('foto'))
        <span class="help-block">{{ $errors->first('foto') }}</span>
    @endif
</div>


<!-- Menampilkan Foto -->
@if (isset($mobil))
	@if (isset($mobil->foto))
		<img src="{{ asset('fotoupload/' .$mobil->foto) }}">		
	@else
		<img src="{{ asset('fotoupload/dummydress.png') }}">
	@endif
@endif

<br><br><br>
<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>
