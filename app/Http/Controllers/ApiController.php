<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    
    public function show()
    {
        try {
            $response = Http::withHeaders([
                'content-type' => 'application/octet-stream',
                'X-RapidAPI-Key' => 'cb9ece6001msh72d11bc3240d6eep1f8b43jsn3cd81da2feeb',
                'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com'
            ])->timeout(240)->get('https://api-football-v1.p.rapidapi.com/v2/leagues');
        
            $data = json_decode($response->body(), true);
            
            return view('principal', ['data' => $data['api']['leagues']]);
            
        } catch (\Exception $e) {
            // por si se cae
            return view('error', ['message' => 'Ocurrió un error al obtener los datos de la API.']);
        }



        
    }
        
}
