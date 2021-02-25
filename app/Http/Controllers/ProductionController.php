<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function index()
    {
        $producciones = Production::get();
        return view('Producciones.producciones', ['producciones' => $producciones]);
    }

    public function produccion($id)
    {
        // try{
        //     $decryptedId = Crypt::decrypt($id);
        // }
        // catch(\Exception $e){
        //     abort(404);
        // }

        $element = Production::findOrFail($id);
        if ($element->tipo == 'producción') {
            $tipo = 'PRODUCCIÓN';
        } else {
            $tipo = 'COPRODUCCIÓN';
        }

        return view('Producciones.produccion', ['element' => $element, 'tipo' => $tipo]);
    }
}