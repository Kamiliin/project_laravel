<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Client\Request;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Client;
class ApiController extends Controller
{
    
    public function show(){

        $client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://api-football-v1.p.rapidapi.com/v3/timezone');
$request->setRequestMethod('GET');
$request->setHeaders([
	'content-type' => 'application/octet-stream',
	'X-RapidAPI-Key' => 'cb9ece6001msh72d11bc3240d6eep1f8b43jsn3cd81da2feeb',
	'X-RapidAPI-Host' => 'api-football-v1.p.rapidapi.com'
]);

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
       
            return view('principal', ['data' =>$api]);
        

    }



}
