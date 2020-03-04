@extends('layouts.master')

@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Modificar Trabajo
         </div>
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form class="" method="post" enctype="multipart/form-data">

              {{method_field('PUT')}}

            @csrf
            <div class="form-group">
               <label for="title">Nombre de la Empresa</label>
               <input type="text" name="empresa" id="empresa" class="form-control" value="{{$trabajo->empresa}}">
            </div>

            <div class="form-group">
              <label for="imagen">Fecha de creacion</label>
              <input type="date" name="fecha" id="fecha" value="{{$trabajo->fecha_creacion}}" class="form-control">
            </div>
            <div class="form-group">
              <label for="imagen">Email</label>
              <input type="email" name="correo" id="correo" value="{{$trabajo->correo}}" class="form-control">
               {{-- TODO: Completa el input para el correo --}}
            </div>
            <div class="form-group">
              <label for="imagen">Descripcion</label>
              <input id="descripcion" name="descripcion" value="{{$trabajo->descripcion}}" class="form-control">
            </div>
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Modificar
               </button>
            </div>
            {{-- TODO: Cerrar formulario --}}
          </form>
         </div>
      </div>
   </div>
</div>
<br>
@stop
