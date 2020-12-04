<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fallas;

class FallasController extends Controller
{
    public function index()
    {
        //
        $fallas = Fallas::get();
        return [
            'datos'=> $fallas
        ];
    }

   
    public function store(Request $request)
    {
        //guardar
        $fallas = new Fallas();
        $fallas->num_falla= $request->num_falla;

        $fallas->save();
    }

  
    public function update(Request $request)
    {
        //actualizar
        $fallas = Fallas::findOrFail($request->id_falla);
        $fallas->num_falla= $request->num_falla;

        $fallas->save();
    }


    public function destroy(Request $request)
    {
        //eliminar
        $fallas = Fallas::findOrFail($request->id_falla);

        $fallas->delete();
    }
}
