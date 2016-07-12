@extends('layouts.master')

@section('content')
		
	<h1>{{$user->name}}'s Facebook</h1>	
	<a href="/logout">Logout</a>
	<hr>
	{{Form::open(['action' => 'PostController@createPost', 'method'=> 'POST'])}}
		<textarea name="content"></textarea>
		{{Form::file('photo')}}
		{{Form::submit()}}
	{{Form::close()}}
	<hr>
	@foreach($posts as $post)
		<div>
			<p>{{$post->content}}</p>
			<p>{{$post->fname}}</p>
			<br>
			<p>Comments:</p>
			@foreach($comments[$post->id] as $comment)
				<p>{{$comment->comment}}</p>
				<p>{{$comment->fname}}</p>
			@endforeach
		</div>
		<hr>
	@endforeach

@stop