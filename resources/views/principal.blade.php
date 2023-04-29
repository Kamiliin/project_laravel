

@extends('layouts.app')

@section('titulo')
    Principal
@endsection


@section('contenido')

<link rel="stylesheet" href="{{asset('css/api-football.css')}}">


<h1>ligas</h1>



@foreach ($data as $league)
    <li>{{ $league['name'] }}</li>
@endforeach


@foreach ($data as $league)
    <div class="card">
        <div class="card-header">
            {{ $league['name'] }}
        </div>
        <div class="card-body">
            <p>Country: {{ $league['country'] }}</p>
            <p>Season: {{ $league['season'] }}</p>
            
           
        </div>
    </div>
@endforeach



@endsection


