<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FootballController extends Controller
{
    public function getChileanClubs()
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com',
            'X-RapidAPI-Key' => env('RAPIDAPI_KEY')
        ])->get('https://api-football-v1.p.rapidapi.com/v3/standings', [
            'league' => '265', // ID de la liga
            'season' => '2023' // Reemplaza con el año de la temporada que deseas consultar
        ]);

        $data = $response->json();

        // Procesa los datos y devuelve la información que deseas
        return view('principal', ['data' => $data]);
    }

    public function getUpcomingMatches(Request $request)
    {
        $response = Http::withHeaders([
            'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com',
            'X-RapidAPI-Key' => env('RAPIDAPI_KEY')
        ])->get('https://api-football-v1.p.rapidapi.com/v3/fixtures', [
            'league' => 265,
            'season' => 2023,
        ]);

        $data = $response->json();

        return view('encuentros', ['matches' => $data['response']]);
    }
}

