@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Turnīri</h1>

        <!-- Filter form -->
        <form method="GET" action="{{ route('turniri.index') }}">
            <div class="form-group">
                <label for="date_from">Datums no</label>
                <input type="date" id="date_from" name="date_from" class="form-control" value="{{ request('date_from') }}">
            </div>
            <div class="form-group">
                <label for="date_to">Datums līdz</label>
                <input type="date" id="date_to" name="date_to" class="form-control" value="{{ request('date_to') }}">
            </div>
            <div class="form-group">
                <label for="valsts">Valsts</label>
                <input type="text" id="valsts" name="valsts" class="form-control" value="{{ request('valsts') }}">
            </div>
            <button type="submit" class="btn btn-primary">Filtrēt</button>
        </form>

        <!-- Table -->
        <table class="table">
            <thead>
                <tr>
                    <th>Turnīra ID</th>
                    <th>Nosaukums</th>
                    <th>Datums</th>
                    <th>Valsts</th>
                    <th>Balva</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($turniri as $turnirs)
                    <tr>
                        <td>{{ $turnirs->TurnirsID }}</td>
                        <td>{{ $turnirs->Nosaukums }}</td>
                        <td>{{ $turnirs->Datums }}</td>
                        <td>{{ $turnirs->Valsts }}</td>
                        <td>{{ $turnirs->Balva }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


