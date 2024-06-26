@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Komandas nosaukums: {{ $komanda->Nosaukums }}</h1>
        <p>Valsts: {{ $komanda->Valsts }}</p>
        <p>Izveides datums: {{ $komanda->IzveidesDatums }}</p>
        <p>Rangs: {{ $komanda->Rangs }}</p>

        <h2>Komentāri</h2>
        @foreach($komanda->comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <p>{{ $comment->content }}</p>
                    @if($comment->image_path)
                        <img src="{{ asset('storage/' . $comment->image_path) }}" alt="Comment Image" style="max-width: 500px; max-height: 500px;">
                    @endif
                    <small>By: {{ $comment->user->name }}</small>
                    @auth
                        @if(auth()->user()->id === $comment->user_id || auth()->user()->role_id == 1)
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
            <form action="{{ route('comment.store', ['type' => 'komanda', 'id' => $komanda->KomandasID]) }}" method="POST" enctype="multipart/form-data">
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


