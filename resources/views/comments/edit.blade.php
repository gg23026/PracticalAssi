@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Comment</h1>

        <form method="POST" action="{{ route('comments.update', $comment->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="content">Content</label>
                <textarea id="content" name="content" class="form-control">{{ old('content', $comment->content) }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Comment</button>
        </form>
    </div>
@endsection
