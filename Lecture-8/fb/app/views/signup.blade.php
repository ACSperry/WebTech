@extends('layouts.master')

@section('title')
<title>Sign Up with us Today!</title>
@stop

@section('content')
<div>
	<h1>Sign Up Form</h1>
	{{Form::open(['action'=> 'RegistrationController@signUp', 'method' => 'POST'])}}

		{{ Form::email('email', null, [ 'placeholder' => 'Email', 'required']) }}
		<br>
		{{ Form::password('password' , [ 'placeholder' => 'Password', 'required'])}}
		<br>
		{{ Form::password('repassword' , [ 'placeholder' => 'Re Type Password', 'required'])}}	
		<br>
		{{Form::text('name', null, [
		'placeholder' => 'Name', 'required'])}}
		<br>
		{{Form::radio('gender', 'male')}} Male
		<br>
		{{Form::radio('gender', 'female')}} Female
		<br>
		{{Form:: submit('Sign Up')}}

	{{Form::close()}}

</div>
@stop