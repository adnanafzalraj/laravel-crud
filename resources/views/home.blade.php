@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>Welcome to Laravel Blog 🚀</h1>
    <p class="lead">A simple CRUD app built with Laravel & Bootstrap.</p>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">View Posts</a>
</div>
@endsection
