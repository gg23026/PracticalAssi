@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Komandas nosaukums: {{ $komanda->Nosaukums }}</h1>
        <p>Valsts: {{ $komanda->Valsts }}</p>
        <p>Izveides datums: </p>{{ $komanda->IzveidesDatums }}</p>
        <p>Rangs: {{ $komanda->Rangs }}</p>

        <h2>Komentāri</h2>
        @foreach($komanda->comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <p>{{ $comment->content }}</p>
                    <small>By: {{ $comment->user->name }}</small>
                    @auth
                        @if(auth()->user()->can('update', $comment))
                            <a href="{{ route('comments.edit', $comment->id) }}">Edit</a>
                        @endif
                        @if(auth()->user()->can('delete', $comment))
                            <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
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
        <form action="{{ route('comment.store', ['type' => 'komanda', 'id' => $komanda->KomandasID]) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="content">Add a comment:</label>
                    <textarea name="content" id="content" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        @endauth
    </div>
@endsection







