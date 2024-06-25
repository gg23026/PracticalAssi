@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $speletajs->Lietotajvards }}</h1>
        <p>{{ $speletajs->Vards }} {{ $speletajs->Uzvards }}</p>
        <p>{{ $speletajs->KomandasID }}</p>
        <p>{{ $speletajs->Rangs }}</p>

        <h2>Comments</h2>
        @foreach ($speletajs->comments as $comment)
            <p>{{ $comment->content }}</p>
        @endforeach

        <h2>Add Comment</h2>
        <form action="{{ route('comment.store', ['type' => 'speletajs', 'id' => $speletajs->SpeletajsID]) }}" method="POST">
            @csrf
            <textarea name="content" rows="3" required></textarea>
            <button type="submit">Add Comment</button>
        </form>
    </div>
@endsection








