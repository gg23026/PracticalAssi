@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Spēlētāja Lietotājvārds: {{ $speletajs->Lietotajvards }}</h1>
        <p>Vārds: {{ $speletajs->Vards }}</p>
        <p>Uzvārds: {{ $speletajs->Uzvards }}</p>
        <p>Komandas nosaukums: {{ $speletajs->komanda->Nosaukums }}</p>
        <p>Rangs: {{ $speletajs->Rangs }}</p>

        <h2>Komentāri</h2>
        @foreach($speletajs->comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <p>{{ $comment->content }}</p>
                    @if($comment->image_path)
                        <img src="{{ asset('storage/' . $comment->image_path) }}" alt="comment image" class="img-fluid">
                    @endif
                    <small>By: {{ $comment->user->name }}</small>
                    @auth
                        @if(auth()->user()->id === $comment->user_id || auth()->user()->is_admin)
                            <a href="{{ route('comments.edit', $comment->id) }}">Edit</a>
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Delete</button>
                            </form>
                        @endif
                    @endauth
                </div>
            </div>
        @endforeach

        @auth
        <form action="{{ route('comment.store', ['type' => 'speletajs', 'id' => $speletajs->SpeletajsID]) }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="form-group">
                    <label for="content">Add a comment:</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Add an image:</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endauth
    </div>
@endsection
