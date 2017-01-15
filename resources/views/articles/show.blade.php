@extends('layout.main')
@section('title', $article->title )

@section('content')
<h1>{{ $article->title }}</h1>

<a href="{{ url('articles') }}" class="btn btn-primary">< Back</a>

<p>{{ $article->content }}</p>


<hr>

<ul class="list-group">
	@foreach($article->comments as $comment)
	<li class="list-group-item">
		{{ $comment->body }}
		<a href="#" class="pull-right">{{ $comment->user->name }}</a>
	</li>
	@endforeach
</ul>

<hr>
<h3>Add a New Comment</h3>

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form method="POST" action = "/articles/{{ $article->id }}/comments">
	{!! csrf_field() !!}
	<div class="form-group">
		<textarea name="body" class="form-control">{{ old('body') }}</textarea>
	</div>

	<div class="form-group">
		<button type="submit" class="
		btn btn-primary">Add Comment</button>
	</div>
</form>

@stop