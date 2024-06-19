@extends('layouts.app')

@section('content')
    <h1>Mači</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Mača ID</th>
                    <th>Komanda 1</th>
                    <th>Komanda 2</th>
                    <th>Rezultāts</th>
                    <th>Datums</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($maci as $macs)
                    <tr>
                        <td>{{ $macs->MacaID }}</td>
                        <td>{{ $macs->komanda1->Nosaukums }}</td>
                        <td>{{ $macs->komanda2->Nosaukums }}</td>
                        <td>{{ $macs->Rezultats }}</td>
                        <td>{{ $macs->Datums }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

