<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiantes;

class EstudiantesController extends Controller
{
 
    public function index()
    {
        //
        $estudiantes = Estudiantes::orderBy('nombres','asc')
        ->get();
        return [
            'datos'=> $estudiantes
        ];
    }

   
    public function store(Request $request)
    {
        //guardar
        $estudiantes = new Estudiantes();
        $estudiantes->tp_doc= $request->tp_doc;
        $estudiantes->num_doc= $request->num_doc;
        $estudiantes->nombres= $request->nombres;
        $estudiantes->apellidos= $request->apellidos;
        $estudiantes->edad= $request->edad;
        $estudiantes->genero= $request->genero;
        $estudiantes->tel= $request->tel;
        $estudiantes->dir= $request->dir;
        $estudiantes->email= $request->email;

        $estudiantes->save();
    }

  
    public function update(Request $request)
    {
        //actualizar
        $estudiantes = Estudiantes::findOrFail($request->id_estudiante);
        $estudiantes->tp_doc= $request->tp_doc;
        $estudiantes->num_doc= $request->num_doc;
        $estudiantes->nombres= $request->nombres;
        $estudiantes->apellidos= $request->apellidos;
        $estudiantes->edad= $request->edad;
        $estudiantes->genero= $request->genero;
        $estudiantes->tel= $request->tel;
        $estudiantes->dir= $request->dir;
        $estudiantes->email= $request->email;

        $estudiantes->save();
    }


    public function destroy(Request $request)
    {
        //eliminar
        $estudiantes = Estudiantes::findOrFail($request->id_estudiante);

        $estudiantes->delete();
    }
}
