@extends('layouts.master')

@section('content')

<div class="row">
  <div class="col-sm-12">
    <div class="jumbotron text-center" style="margin-bottom:0">
      <h1>Empresa: {{$trabajo['empresa']}} </h1>
      <p>{{$trabajo['fecha_creacion']}}</p>
      <p>{{$trabajo['correo']}}</p>
      <p>{{$trabajo['descripcion']}}</p>
      <a href="../edit/{{$trabajo['id']}}" class="btn btn-warning"   role="button">Editar</a>
      <form  action="{{action('TrabajosController@deleteDelete', $trabajo->id)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" style="display:inline">
        Borrar
        </button>
      </form>
      <a href="../" class="btn btn-info"role="button" >Volver</a>
    </div>

  </div>
</div>

@stop
