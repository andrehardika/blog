@extends('layout.main')
@section('title', 'Articles')

@section('content')
<h1>Welcome!</h1>

<a href="{{ url('articles/create') }}" class="btn btn-primary">+ Add</a>
<table class="table">
	<thead>
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Content</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		@php $no = 0; @endphp
		@foreach($articles as $article)
		<tr>
			<td>{{ ++$no }}</td>
			<td>{{ $article->title }}</td>
			<td>{{ $article->content }}</td>
			<td>
				<a href="{{ url('articles/'.$article->id) }}" class="btn btn-default">Detail</a>
				<a href="{{ url('articles/'.$article->id.'/edit') }}" class="btn btn-warning">Edit</a>
				<button class="btn btn-danger" data-token="{{ csrf_token() }}" onclick="delete_article({{ $article->id }})" id="delete">Delete</button>
			</td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop