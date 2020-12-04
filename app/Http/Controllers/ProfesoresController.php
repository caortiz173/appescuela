<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profesores;

class ProfesoresController extends Controller
{
    
    public function index()
    {
        //
        $profesores = Profesores::orderBy('nombres','asc')
        ->get();
        return [
            'datos'=> $profesores
        ];
    }
    

    public function store(Request $request)
    {
        //guardar
        $profesores = new Profesores();
        $profesores->tp_doc= $request->tp_doc;
        $profesores->num_doc= $request->num_doc;
        $profesores->nombres= $request->nombres;
        $profesores->apellidos= $request->apellidos;
        $profesores->edad= $request->edad;
        $profesores->genero= $request->genero;
        $profesores->tel= $request->tel;
        $profesores->dir= $request->dir;
        $profesores->email= $request->email;

        $profesores->save();
    }

  
    public function update(Request $request)
    {
        //actualizar
        $profesores = Profesores::findOrFail($request->id_profesor);
        $profesores->tp_doc= $request->tp_doc;
        $profesores->num_doc= $request->num_doc;
        $profesores->nombres= $request->nombres;
        $profesores->apellidos= $request->apellidos;
        $profesores->edad= $request->edad;
        $profesores->genero= $request->genero;
        $profesores->tel= $request->tel;
        $profesores->dir= $request->dir;
        $profesores->email= $request->email;

        $profesores->save();
    }


    public function destroy(Request $request)
    {
        //eliminar
        $profesores = Profesores::findOrFail($request->id_profesor);

        $profesores->delete();
    }
}
