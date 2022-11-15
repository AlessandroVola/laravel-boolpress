@extends('layouts.dashboard')

@section('content')
    <form method="POST"  action="{{ route('admin.posts.update', $post->id) }}">
        @csrf
        @method('PATCH')
        <div>
            <label for="title">Titolo:</label>
            <input type="text" required minlength="5" maxlength="255" name="title" value="{{ old('title', $post->title) }}">
        </div>
        <div>
            <label for="content">Contenuto post:</label>
            <textarea name="content" required cols="30" rows="10" value="{{ old('content', $post->content) }}"></textarea>
        </div>
        <div>
            <input type="submit" value="Aggiorna Post">
        </div>
        
    </form>
    

@endsection 