@extends('layout.main')
@section('content')

@section('title', 'Edit Article')

<h1>Edit article</h1>

@if (count($errors) > 0)
<div class="alert alert-danger">
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form method="POST" action="{{ url('articles/'.$article->id) }}">
	{{ method_field('PATCH') }}
	{{ csrf_field() }}
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ $article->title }}">
	</div>
	<div class="form-group">
		<label for="content">Content</label>
		<textarea type="password" class="form-control" id="content" placeholder="Content" name="content">{{ $article->content }}</textarea>
	</div>
	<button type="submit" class="btn btn-primary btn-block">Submit</button>
</form>
@stop