@extends('layouts.app')

@section('content')
    <h1>Spēlētāji</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Spēlētāja ID</th>
                    <th>Vārds</th>
                    <th>Uzvārds</th>
                    <th>Lietotājvārds</th>
                    <th>Komandas ID</th>
                    <th>Rangs</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($speletaji as $speletajs)
                    <tr>
                        <td>{{ $speletajs->SpeletajsID }}</td>
                        <td>{{ $speletajs->Vards }}</td>
                        <td>{{ $speletajs->Uzvards }}</td>
                        <td>{{ $speletajs->Lietotajvards }}</td>
                        <td>{{ $speletajs->KomandasID }}</td>
                        <td>{{ $speletajs->Rangs }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

