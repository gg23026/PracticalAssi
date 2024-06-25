@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Spēlētāji</h1>

        <!-- Filter form -->
        <form method="GET" action="{{ route('speletaji.index') }}">
            <div class="form-group">
                <label for="team_id">Komandas ID</label>
                <input type="number" id="team_id" name="team_id" class="form-control" value="{{ request('team_id') }}">
            </div>
            <div class="form-group">
                <label for="rank_min">Minimālais rangs</label>
                <input type="number" id="rank_min" name="rank_min" class="form-control" value="{{ request('rank_min') }}">
            </div>
            <div class="form-group">
                <label for="rank_max">Maksimālais rangs</label>
                <input type="number" id="rank_max" name="rank_max" class="form-control" value="{{ request('rank_max') }}">
            </div>
            <button type="submit" class="btn btn-primary">Filtrēt</button>
        </form>

        <table class="table">
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
                        <td><a href="{{ route('speletaji.show', $speletajs->SpeletajsID) }}">{{ $speletajs->Lietotajvards }}</a></td>
                        <td>{{ $speletajs->KomandasID }}</td>
                        <td>{{ $speletajs->Rangs }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection




