

@extends('layouts.app')

@section('titulo')
    Principal
@endsection


@section('contenido')

{{$data}}

<div id="wg-api-football-games"
data-host="v3.football.api-sports.io"
data-key="cb9ece6001msh72d11bc3240d6eep1f8b43jsn3cd81da2feeb"
data-date=""
data-league=""
data-season=""
data-theme=""
data-refresh="15"
data-show-toolbar="true"
data-show-errors="false"
data-show-logos="true"
data-modal-game="true"
data-modal-standings="true"
data-modal-show-logos="true">
</div>
<script
type="module"
src="https://widgets.api-sports.io/2.0.3/widgets.js">
</script>


@endsection


