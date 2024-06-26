@extends('layouts.app')

@section('content')
    <div class="container">
        @if(isset($speletajs))
            <h1>Spēlētāja Lietotājvārds: {{ $speletajs->lietotajvards }}</h1>
            <p>Spēlētāja vārds un uzvārds: {{ $speletajs->Vards }} {{ $speletajs->Uzvards }}</p>
            <p>Komanda: {{ $speletajs->komanda->Nosaukums }}</p>
            <p>Rangs: {{ $speletajs->Rangs }}</p>

            <h2>Komentāri</h2>
            @foreach($speletajs->comments as $comment)
            <div class="card mb-3">
                <div class="card-body">
                    <p>{{ $comment->content }}</p>
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
                <form action="{{ route('comment.store', ['type' => 'speletajs', 'id' => $speletajs->SpeletajsID]) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="content">Add a comment:</label>
                        <textarea name="content" id="content" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            @endauth

        @endif
    </div>
@endsection