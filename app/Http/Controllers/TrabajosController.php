<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajo;

class TrabajosController extends Controller
{
  /*private $arrayTrabajos = array(
       array(
           'empresa' => 'Gogle',
           'fecha_creacion' => '03/10/2019',
           'correo' => 'info@gogle.es',
           'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel venenatis nisi. Aenean mauris lectus, tincidunt nec urna ac, ultricies dignissim massa. Pellentesque finibus, tortor pellentesque luctus sagittis, enim felis vehicula felis, quis maximus risus ligula a turpis. Integer lobortis odio eget ipsum sagittis tristique. Cras ultrices tincidunt posuere. Suspendisse ultricies turpis vel lacus pretium, sed tristique eros posuere. Mauris in tellus sed nibh elementum ornare quis ac metus.',
           'numero'=>'0'
       ),
       array(
           'empresa' => 'Morfeo',
           'fecha_creacion' => '05/03/1997',
           'correo' => 'morfeo@matrix.org',
           'descripcion' =>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel venenatis nisi. Aenean mauris lectus, tincidunt nec urna ac, ultricies dignissim massa. Pellentesque finibus, tortor pellentesque luctus sagittis, enim felis vehicula felis, quis maximus risus ligula a turpis. Integer lobortis odio eget ipsum sagittis tristique. Cras ultrices tincidunt posuere. Suspendisse ultricies turpis vel lacus pretium, sed tristique eros posuere. Mauris in tellus sed nibh elementum ornare quis ac metus.',
           'numero'=>'1'
       )
   );*/

   public function getIndex()
   {
     $arrayTrabajos = Trabajo::all();
     return view('trabajos/trabajos', array('arraytrabajos'=>$arrayTrabajos));
   }

   public function getCreate()
   {
     return view('trabajos/create');
   }

   public function postCreate(Request $request)
   {
     $trabajo = new Trabajo;
     $trabajo->empresa = $request->input('empresa');
     $trabajo->fecha_creacion = $request->input('fecha');
     $trabajo->correo = $request->input('correo');
     $trabajo->descripcion = $request->input('descripcion');

     $trabajo->save();
        return redirect()->action('TrabajosController@getindex');

   }

   public function getShow($id)
   {
     $trabajo = Trabajo::findOrFail($id);
     return view('/trabajos/show', array('trabajo'=>$trabajo));
   }

   public function getEdit($id)
   {
     $trabajo = Trabajo::findOrFail($id);
     return view('/trabajos/edit', array('trabajo'=>$trabajo));
   }

   public function putEdit(Request $request, $id)
   {

       $trabajo = Trabajo::findOrFail($id);
       $trabajo->empresa = $request->input('empresa');
       $trabajo->fecha_creacion = $request->input('fecha');
       $trabajo->correo = $request->input('correo');
       $trabajo->descripcion = $request->input('descripcion');

       $trabajo->save();
          return redirect()->action('TrabajosController@getindex');
    }

   public function deleteDelete(Request $request, $id)
{
    $trabajo = Trabajo::findOrFail($id);
    $trabajo->delete();
    return redirect('trabajos');
}


}
