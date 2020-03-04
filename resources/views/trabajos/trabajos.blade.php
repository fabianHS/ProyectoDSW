@extends('layouts.master')
@section('content')
<main role="main" class="inner cover">
  @foreach( $arraytrabajos as $key => $trabajos )
  <br>
  <a href="{{ url('/trabajos/show/'.$trabajos['id']) }}">
  <div class="jumbotron text-center" style="margin-bottom:0">
    <h1>Empresa: {{$trabajos['empresa']}} </h1>
    <p>{{$trabajos['fecha']}}</p>
    <p>{{$trabajos['id']}}</p>
    <p>{{$trabajos['correo']}}</p>
    <p>{{$trabajos['descripcion']}}</p>
  </div>
  </a>
  @endforeach

</main>

@stop
