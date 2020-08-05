@if (isset($user))
    {!! Form::hidden('id', $produsen->id) !!}
@endif

<!-- produsen mobil-->
@if ($errors->any())
    <div class="form-group {{ $errors->has('nama_produsen') ? 
        'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('nama_produsen', 'Nama Perusahaan :', ['class' => 'control-label']) !!}
    {!! Form::text('nama_produsen', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nama_produsen'))
        <span class="help-block">{{ $errors->first('nama_produsen') }}</span>
    @endif
</div>

<!-- Keterangan Lokasi -->
@if ($errors->any())
    <div class="form-group {{ $errors->has('keterangan') ? 
        'has-error' : 'has-success' }}">
@else
    <div class="form-group">
@endif
    {!! Form::label('keterangan', 'Lokasi Perusahaan :', ['class' => 'control-label']) !!}
    {!! Form::text('keterangan', null, ['class' => 'form-control']) !!}
    @if ($errors->has('keterangan'))
        <span class="help-block">{{ $errors->first('keterangan') }}</span>
    @endif
</div>

<!-- Submit Button -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>