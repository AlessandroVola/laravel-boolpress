@extends('layouts.dashboard')

@section('content')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->content }}</p>

    {{-- categoria non esiste per i vecchi posts --}}
    @if ($post->category)
        <p>{{ $post->category->name }}</p>
        @else
        <p>Nessuna categoria selezionata</p>
    @endif
    
    <div>
        <a href="{{ route('admin.posts.edit', $post->id) }}">Edit Post</a>
    </div>
@endsection
