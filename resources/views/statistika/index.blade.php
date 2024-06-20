@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Statistika</h1>

        <!-- Filter form -->
        <form method="GET" action="{{ route('statistika.index') }}">
            <div class="form-group">
                <label for="komanda">Komandas nosaukums</label>
                <input type="text" id="komanda" name="komanda" class="form-control" value="{{ request('komanda') }}">
            </div>
            <div class="form-group">
                <label for="uzvaras_vairak">Uzvaras vairāk par</label>
                <input type="number" id="uzvaras_vairak" name="uzvaras_vairak" class="form-control" value="{{ request('uzvaras_vairak') }}">
            </div>
            <div class="form-group">
                <label for="uzvaras_mazak">Uzvaras mazāk par</label>
                <input type="number" id="uzvaras_mazak" name="uzvaras_mazak" class="form-control" value="{{ request('uzvaras_mazak') }}">
            </div>
            <div class="form-group">
                <label for="zaudejumi_vairak">Zaudējumi vairāk par</label>
                <input type="number" id="zaudejumi_vairak" name="zaudejumi_vairak" class="form-control" value="{{ request('zaudejumi_vairak') }}">
            </div>
            <div class="form-group">
                <label for="zaudejumi_mazak">Zaudējumi mazāk par</label>
                <input type="number" id="zaudejumi_mazak" name="zaudejumi_mazak" class="form-control" value="{{ request('zaudejumi_mazak') }}">
            </div>
            <button type="submit" class="btn btn-primary">Filtrēt</button>
        </form>

        <!-- Table -->
        <table class="table">
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




