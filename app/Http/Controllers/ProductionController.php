<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function index(){
        return view('Producciones.producciones');
    }

    public function produccion($id){
        // try{
        //     $decryptedId = Crypt::decrypt($id);
        // }
        // catch(\Exception $e){
        //     abort(404);
        // }

        $element = Production::findOrFail($id);
        $tipo = 'PRODUCCIÓN';

        return view('Producciones.produccion', ['element'=>$element,'tipo'=>$tipo]);
    }
}
