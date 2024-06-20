@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Mači</h1>

        <!-- Filter form -->
        <form method="GET" action="{{ route('maci.index') }}">
            <div class="form-group">
                <label for="komanda">Komandas Nosaukums</label>
                <input type="text" id="komanda" name="komanda" class="form-control" value="{{ request('komanda') }}">
            </div>
            <button type="submit" class="btn btn-primary">Filtrēt</button>
        </form>

        <!-- Table -->
        <table class="table">
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

