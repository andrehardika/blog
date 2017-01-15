@extends('layout.main')
@section('title', $article->title )

@section('content')
	<h1>{{ $article->title }}</h1>

	<a href="{{ url('articles') }}" class="btn btn-primary">< Back</a>
	
	<h3>{{ $article->content }}</h3>
@stop