@extends('layouts.master')
@section('content')
<div class="row" style="margin-top:40px">
   <div class="offset-md-3 col-md-6">
      <div class="card">
         <div class="card-header text-center">
            Crear Trabajo
         <div class="card-body" style="padding:30px">

            {{-- TODO: Abrir el formulario e indicar el método POST --}}
            <form class="" method="POST">


              <!--<input type="hidden" name="_method" value="PUT">-->

            {{-- TODO: Protección contra CSRF --}}
            {{ csrf_field() }}
            <div class="form-group">
               <label for="title">Nombre de la Empresa</label>
               <input type="text" name="empresa" id="empresa" class="form-control">
            </div>

            <div class="form-group">
              <label for="imagen">Fecha de creacion</label>
              <input type="date" name="fecha" id="fecha" value="" class="form-control">
            </div>

            <div class="form-group">
              <label for="imagen">Email</label>
              <input type="email" name="correo" id="correo" value="" class="form-control">
               {{-- TODO: Completa el input para el correo --}}
            </div>
            <div class="form-group">
              <label for="imagen">Descripcion</label>
              <input id="descripcion" name="descripcion" value="" class="form-control">
            </div>
            <div class="form-group text-center">
               <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                   Crear
               </button>
            </div>
            {{-- TODO: Cerrar formulario --}}
          </form>
         </div>
      </div>
   </div>
</div>
@stop
