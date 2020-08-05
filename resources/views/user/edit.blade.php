@extends('template')

@section('main')
<div id = 'user'>
	<center><b><h2>Edit User</h2></b></center>

	{!! Form::model($user, ['method' => 'PATCH', 'action' => ['UserController@update', $user->id]]) !!}
  	@include('user.form', ['submitButtonText' => 'Update'])
  	{!! Form::close() !!}
</div>
@stop

@section('footer')
	@include('footer')
@stop
