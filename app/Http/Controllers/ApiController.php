<?php

namespace App\Http\Controllers;
namespace Illuminate\Http\Client;

use Illuminate\Http\Client\Request;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\HttpClientException;
use Illuminate\Http\Client;
use App\Http\Controllers\Controller;



class ApiController extends Controller
{
    
    public function show(){
        $curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://api-football-v1.p.rapidapi.com/v3/timezone",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: api-football-v1.p.rapidapi.com",
		"X-RapidAPI-Key: cb9ece6001msh72d11bc3240d6eep1f8b43jsn3cd81da2feeb",
		"content-type: application/octet-stream"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	$api= "cURL Error #:" . $err;
} else {
	$api= $response;
}
            return view('principal', ['data' =>$api]);
        

    }



}
