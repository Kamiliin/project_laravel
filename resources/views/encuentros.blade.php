<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Próximos Partidos Liga Chilena</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
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
                    @if ($match['fixture']['status']['short'] == 'NS') <!-- Esta condición es de partidos sin jugar -->
                        <tr>
                            <td>{{ \Carbon\Carbon::parse($match['fixture']['date'])->format('d/m/Y') }}</td>
                            <td><img src="{{ $match['teams']['home']['logo'] }}" alt="Logo Local" width="50" height="50"> {{ $match['teams']['home']['name'] }}</td>
                            <td>V/S</td>
                            <td><img src="{{ $match['teams']['away']['logo'] }}" alt="Logo Visitante" width="50" height="50"> {{ $match['teams']['away']['name'] }}</td>
                            <td>{{ $match['fixture']['venue']['name'] }}</td>
                            <td>{{ \Carbon\Carbon::parse($match['fixture']['date'])->format('H:i') }}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">

        </div>
    </div>
</body>
</html>
