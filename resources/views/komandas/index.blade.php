@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Komandas</h1>

        <!-- Filter form -->
        <form method="GET" action="{{ route('komandas.index') }}">
            <div class="form-group">
                <label for="country">Valsts</label>
                <input type="text" id="country" name="country" class="form-control" value="{{ request('country') }}">
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
                    <th>Komandas ID</th>
                    <th>Nosaukums</th>
                    <th>Valsts</th>
                    <th>Rangs</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($komandas as $komanda)
                    <tr>
                        <td>{{ $komanda->KomandasID }}</td>
                        <td><a href="{{ route('komandas.show', $komanda->KomandasID) }}">{{ $komanda->Nosaukums }}</a></td>
                        <td>{{ $komanda->Valsts }}</td>
                        <td>{{ $komanda->Rangs }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection




