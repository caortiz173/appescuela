<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Excusas;

class ExcusasController extends Controller
{
    public function index()
    {
        //
        $excusas = Excusas::get();
        return [
            'datos'=> $excusas
        ];
    }

   
    public function store(Request $request)
    {
        //guardar
        $excusas = new Excusas();
        $excusas->detalle_excusa= $request->detalle_excusa;

        $excusas->save();
    }

  
    public function update(Request $request)
    {
        //actualizar
        $excusas = Excusas::findOrFail($request->id_excusa);
        $excusas->detalle_excusa= $request->detalle_excusa;

        $excusas->save();
    }


    public function destroy(Request $request)
    {
        //eliminar
        $excusas = Excusas::findOrFail($request->id_excusa);

        $excusas->delete();
    }
}
