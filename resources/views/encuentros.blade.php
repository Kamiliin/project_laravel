@extends('layouts.app')

@section('titulo')
Encuentros 

@endsection


@section('contenido')


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <div class="container mt-5">
        <h1>Próximos Partidos Liga Chilena</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Equipo Local</th>
                    <th>V/S</th>
                    <th>Equipo Visitante</th>
                    <th>Estadio</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody>
                @foreach($matches as $match)
                    <tr>
                        <td>{{ \Carbon\Carbon::parse($match->date)->format('d/m/Y') }}</td>
                        <td><img src="{{ $match->home_team_logo }}" alt="Logo Local" width="50" height="50"> {{ $match->home_team_name }}</td>
                        <td>V/S</td>
                        <td><img src="{{ $match->away_team_logo }}" alt="Logo Visitante" width="50" height="50"> {{ $match->away_team_name }}</td>
                        <td>{{ $match->venue }}</td>
                        <td>{{ \Carbon\Carbon::parse($match->date)->format('H:i') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">

        </div>
    </div>
@endsection