@extends('layouts.app')

@section('content')
    <h1>Komandas</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Komandas ID</th>
                    <th>Nosaukums</th>
                    <th>Valsts</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($komandas as $komanda)
                    <tr>
                        <td>{{ $komanda->KomandasID }}</td>
                        <td>{{ $komanda->Nosaukums }}</td>
                        <td>{{ $komanda->Valsts }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

