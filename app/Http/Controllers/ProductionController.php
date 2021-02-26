<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function index(Request $request)
    {
        if(!$request->busqueda){
            $producciones = Production::paginate(2);
            $tipo = 'PRODUCCIONES';
            return view('Producciones.producciones', ['producciones' => $producciones, 'tipo'=>$tipo]);
        }

        //obtenemos todas las propiedades
        $producciones=Production::select('*');
        $tipo = 'PRODUCCIONES';

        if(isset($request->busqueda)){
            /*foreach ($propiedades as $propiedad){
                if(stripos($propiedad->description,$request->busqueda) !== false){
                    $properties[]=$propiedad;
                }
            }
            $propiedades=$properties;
            $properties=[];*/

            $producciones = $producciones->where('titulo','like','%'.$request->busqueda.'%')
            ->orWhere('descripcion','like','%'.$request->busqueda.'%')
            ->orWhere('sinopsis','like','%'.$request->busqueda.'%')
            ->orWhere('masinfo','like','%'.$request->busqueda.'%')
            ->orWhere('reconocimientos','like','%'.$request->busqueda.'%')
            ->orWhere('fecha','like','%'.$request->busqueda.'%')
            ->orWhere('criticas','like','%'.$request->busqueda.'%');
        }

        $producciones = $producciones->paginate(5)->appends(request()->except('page'));

        return view('Producciones.producciones', ['producciones' => $producciones, 'tipo'=>$tipo]);
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