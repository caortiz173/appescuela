<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Asistencias;

class AsistenciasController extends Controller
{
    public function index()
    {
        //
        $asistencias = Asistencias::get();
        return [
            'datos'=> $asistencias
        ];
    }

   
    public function store(Request $request)
    {
        //guardar
        $asistencias = new Asistencias();
        $asistencias->fecha= $request->fecha;
        $asistencias->hora= $request->hora;

        $asistencias->save();
    }

  
    public function update(Request $request)
    {
        //actualizar
        $asistencias = Asistencias::findOrFail($request->id_asistencia);
        $asistencias->fecha= $request->fecha;
        $asistencias->hora= $request->hora;

        $asistencias->save();
    }


    public function destroy(Request $request)
    {
        //eliminar
        $asistencias = Asistencias::findOrFail($request->id_asistencia);

        $asistencias->delete();
    }
}
