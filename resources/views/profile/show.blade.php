@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $user->name }}'s Profile</h1>
    <h2>Comments:</h2>
    @if ($user->comments->isEmpty())
        <p>No comments yet.</p>
    @else
        <ul>
            @foreach ($user->comments as $comment)
                <li>
                    {{ $comment->content }} - <em>{{ $comment->created_at->format('d M Y') }}</em>
                    <p><small>Posted on {{ $comment->created_at }}</small></p>
                    @if($comment->image_path)
                        <div style="max-width: 400px; max-height: 400px; overflow: hidden;">
                            <img src="{{ asset('storage/' . $comment->image_path) }}" alt="Comment Image" style="width: 100%; height: auto;">
                        </div>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection

@section('navbar')
<ul class="navbar-nav ms-auto">
    <!-- Authentication Links -->
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('profile.show', ['id' => Auth::user()->id]) }}">
                    {{ __('Profile') }}
                </a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
@endsection



