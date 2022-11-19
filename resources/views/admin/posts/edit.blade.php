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
        {{-- category selection --}}
        <div>
            <label for="category_id">Categoria:</label>
            <select name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}" 
                    {{ $category->id == old('category_id', $post->category_id)? 'selected' : '' }}>
                    {{ $category->name }}
                
                </option>
                @endforeach
            </select>
        </div>

        {{-- tags selection --}}
        @if($errors->any())
            <div>
                <label>Tags selected:</label>
                @foreach($tags as $tag)
                    <label>{{ $tag->name }}</label>
                    <input 
                    {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}
                    type="checkbox" name="tags[]" value="{{ $tag->id }}">
                @endforeach
            </div>
        @else
            <div>
                <label>Tags selected:</label>
                @foreach($tags as $tag)
                    <label>{{ $tag->name }}</label>
                    <input 
                    {{ $post->tags->contains($tag) ? 'checked' : '' }}
                    type="checkbox" name="tags[]" value="{{ $tag->id }}">
                @endforeach
            </div>
        @endif

        

        <div>
            <input type="submit" value="Aggiorna Post">
        </div>
        
    </form>
    

@endsection 