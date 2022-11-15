@extends('layouts.dashboard')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>

    <div>
        <a href="{{ route('admin.posts.edit', $post->id) }}">Edit Post</a>
    </div>
@endsection
