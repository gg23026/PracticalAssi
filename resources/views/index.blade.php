<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Esports Home' }}</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/komandas') }}">Komandas</a>
        <a href="{{ url('/speletaji') }}">Spēlētāji</a>
        <a href="{{ url('/turniri') }}">Turnīri</a>
        <a href="{{ url('/maci') }}">Mači</a>
        <a href="{{ url('/speles') }}">Spēles</a>
        <a href="{{ url('/statistika') }}">Statistika</a>
    </div>

    <div class="container">
        <h1>{{ $title ?? 'Esports Home' }}</h1>

        @isset($komandas)
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Komandas ID</th>
                            <th>Nosaukums</th>
                            <th>Valsts</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($komandas as $komanda)
                            <tr>
                                <td>{{ $komanda->KomandasID }}</td>
                                <td>{{ $komanda->Nosaukums }}</td>
                                <td>{{ $komanda->Valsts }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endisset

        @isset($speletaji)
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
        @endisset

        @isset($turniri)
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
        @endisset

        @isset($maci)
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
        @endisset

        @isset($speles)
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Spēles ID</th>
                            <th>Nosaukums</th>
                            <th>Žanrs</th>
                            <th>Iedošanas Datums</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($speles as $spele)
                            <tr>
                                <td>{{ $spele->SpelesID }}</td>
                                <td>{{ $spele->Nosaukums }}</td>
                                <td>{{ $spele->Zanrs }}</td>
                                <td>{{ $spele->IzdosanasDatums }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endisset

        @isset($statistika)
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
        @endisset
    </div>
</body>
</html>













