@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>All Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">+ New Post</a>
</div>

@if(session('success'))
  <div class="alert alert-success">{{ session('success') }}</div>
@endif

<ul class="list-group">
@foreach($posts as $post)
  <li class="list-group-item d-flex justify-content-between align-items-center">

     <div>
        <strong>{{ $post->title }}</strong><br>
        <small>{{ $post->content }}</small>
    </div>

     <div>
        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
        </form>
    </div>
  </li>
@endforeach
</ul>
@endsection
