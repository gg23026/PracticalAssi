@extends('layouts.app')

@section('content')
    <h1>Turnīri</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Turnīra ID</th>
                    <th>Nosaukums</th>
                    <th>Datums</th>
                    <th>Balva</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($turniri as $turnirs)
                    <tr>
                        <td>{{ $turnirs->TurnirsID }}</td>
                        <td>{{ $turnirs->Nosaukums }}</td>
                        <td>{{ $turnirs->Datums }}</td>
                        <td>{{ $turnirs->Balva }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

