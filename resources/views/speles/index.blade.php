@extends('layouts.app')

@section('content')
    <h1>Spēles</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Spēles ID</th>
                    <th>Nosaukums</th>
                    <th>Eliminations</th>
                    <th>Deaths</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($speles as $spele)
                    <tr>
                        <td>{{ $spele->SpelesID }}</td>
                        <td>{{ $spele->Nosaukums }}</td>
                        <td>{{ $spele->Elimination }}</td>
                        <td>{{ $spele->Death }}</td>
                        <td>{{ $spele->created_at }}</td>
                        <td>{{ $spele->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

