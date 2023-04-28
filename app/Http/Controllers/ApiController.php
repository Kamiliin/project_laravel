<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    
    public function show(){

        $api = $response = Http::withHeaders([
            'content-type'=> 'application/octet-stream',
            'X-RapidAPI-Key' => 'cb9ece6001msh72d11bc3240d6eep1f8b43jsn3cd81da2feeb',
            'X-RapidAPI-Host'=> 'api-football-v1.p.rapidapi.com'
            
         ])->get('https://api-football-v1.p.rapidapi.com/v3/timezone');

            return view('principal', ['data' =>$api]);
        
        }



}
