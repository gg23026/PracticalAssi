@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $komanda->Nosaukums }}</h1>
        <p>{{ $komanda->Valsts }}</p>
        <p>{{ $komanda->IzveidesDatums }}</p>
        <p>{{ $komanda->Rangs }}</p>

        <h2>Comments</h2>
        @foreach ($komanda->comments as $comment)
            <p>{{ $comment->content }}</p>
        @endforeach

        <h2>Add Comment</h2>
        <form action="{{ route('comment.store', ['type' => 'komanda', 'id' => $komanda->KomandasID]) }}" method="POST">
            @csrf
            <textarea name="content" rows="3" required></textarea>
            <button type="submit">Add Comment</button>
        </form>
    </div>
@endsection







