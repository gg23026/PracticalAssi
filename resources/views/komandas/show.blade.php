@extends('layouts.app')

@section('content')
    <h1>{{ $komanda->Nosaukums }}</h1>
    <p>Izveides Datums: {{ $komanda->IzveidesDatums }}</p>
    <p>Valsts: {{ $komanda->Valsts }}</p>
    <p>Rangs: {{ $komanda->Rangs }}</p>
    
    <a href="{{ route('komandas.index') }}">Atpakaļ uz komandu sarakstu</a>
@endsection