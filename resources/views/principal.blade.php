 
 @extends('layouts.app')

 @section('titulo')
 
 @endsection
  
 @section('contenido')
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

 <div class="container mt-5">
        <h1>Tabla de Posiciones Liga Chilena 2023</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Posición</th>
                    <th>Club</th>
                    <th>Puntos</th>
                    <th>Partidos Jugados</th>
                    <th>Partidos Ganados</th>
                    <th>Partidos Empatados</th>
                    <th>Partidos Perdidos</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['response'][0]['league']['standings'][0] as $position)
                    <tr>
                        <td>{{ $position['rank'] }}</td>
                        <td>{{ $position['team']['name'] }}</td>
                        <td>{{ $position['points'] }}</td>
                        <td>{{ $position['all']['played'] }}</td>
                        <td>{{ $position['all']['win'] }}</td>
                        <td>{{ $position['all']['draw'] }}</td>
                        <td>{{ $position['all']['lose'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection