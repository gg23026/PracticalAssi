@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $speletajs->Vards }} {{ $speletajs->Uzvards }}</h1>
        <p>Lietotājvārds: {{ $speletajs->Lietotajvards }}</p>
        <p>Komandas ID: {{ $speletajs->KomandasID }}</p>
        <p>Rangs: {{ $speletajs->Rangs }}</p>
        <p>Apraksts: {{ $speletajs->apraksts }}</p>
        <a href="{{ route('speletaji.index') }}">Atpakaļ uz spēlētāju sarakstu</a>
    </div>
@endsection