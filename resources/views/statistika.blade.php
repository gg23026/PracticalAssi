@extends('layouts.app')

@section('content')
    <h1>Statistika</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Komandas ID</th>
                    <th>Nosaukums</th>
                    <th>Uzvaras</th>
                    <th>Zaudējumi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($statistika as $stats)
                    <tr>
                        <td>{{ $stats->KomandasID }}</td>
                        <td>{{ $stats->komanda->Nosaukums }}</td>
                        <td>{{ $stats->Uzvaras }}</td>
                        <td>{{ $stats->Zaudejumi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

