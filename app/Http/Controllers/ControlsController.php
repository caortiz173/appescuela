<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controls;

class ControlsController extends Controller
{
  
    public function index()
    {
        //
        $controls = Controls::get();
        return [
            'datos'=> $controls
        ];
    }


    public function store(Request $request)
    {
        //guardar
        $controls = new Controls();
        $controls->id_estudiante= $request->id_estudiante;
        $controls->id_profesor= $request->id_profesor;
        $controls->id_asistencia= $request->id_asistencia;
        $controls->id_excusa= $request->id_excusa;
        $controls->id_falla= $request->id_falla;

        $controls->save();
    }
   
    public function update(Request $request)
    {
        //actualizar
        $controls = Controls::findOrFail($request->id_control);
        $controls->id_estudiante= $request->id_estudiante;
        $controls->id_profesor= $request->id_profesor;
        $controls->id_asistencia= $request->id_asistencia;
        $controls->id_excusa= $request->id_excusa;
        $controls->id_falla= $request->id_falla;

        $controls->save();
    }

 
    public function destroy(Request $request)
    {
        //eliminar
        $controls = Controls::findOrFail($request->id_control);

        $controls->delete();
    }
}
