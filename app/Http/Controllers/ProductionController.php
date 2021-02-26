<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function index(Request $request)
    {
        //si no hay búsqueda se muestra la página
        if(!$request->busqueda){
            $elements = Production::where('tipo','producción')->paginate(5);
            $tipo = 'PRODUCCIONES';
            return view('Producciones.producciones', ['elements' => $elements, 'tipo'=>$tipo]);
        }

        //obtenemos todas las producciones
        $elements=Production::where('tipo','producción');
        $tipo = 'PRODUCCIONES';

        //realiza la busqueda
        if(isset($request->busqueda)){
            $elements = $elements->where('titulo','like','%'.$request->busqueda.'%')
            ->orWhere('descripcion','like','%'.$request->busqueda.'%')
            ->orWhere('sinopsis','like','%'.$request->busqueda.'%')
            ->orWhere('masinfo','like','%'.$request->busqueda.'%')
            ->orWhere('reconocimientos','like','%'.$request->busqueda.'%')
            ->orWhere('fecha','like','%'.$request->busqueda.'%')
            ->orWhere('criticas','like','%'.$request->busqueda.'%');
        }

        $elements = $elements->paginate(5)->appends(request()->except('page'));

        //vuelve a la pagina
        return view('Producciones.producciones', ['elements' => $elements, 'tipo'=>$tipo]);
    }

    public function coproducciones(Request $request)
    {
        //si no hay búsqueda se muestra la página
        if(!$request->busqueda){
            $elements = Production::where('tipo','coproducción')->paginate(5);
            $tipo = 'COPRODUCCIONES';
            return view('Producciones.producciones', ['elements' => $elements, 'tipo'=>$tipo]);
        }

        //obtenemos todas las coproducciones
        $elements=Production::where('tipo','coproducción');
        $tipo = 'COPRODUCCIONES';

        //realiza la busqueda
        if(isset($request->busqueda)){
            $elements = $elements->where('titulo','like','%'.$request->busqueda.'%')
            ->orWhere('descripcion','like','%'.$request->busqueda.'%')
            ->orWhere('sinopsis','like','%'.$request->busqueda.'%')
            ->orWhere('masinfo','like','%'.$request->busqueda.'%')
            ->orWhere('reconocimientos','like','%'.$request->busqueda.'%')
            ->orWhere('fecha','like','%'.$request->busqueda.'%')
            ->orWhere('criticas','like','%'.$request->busqueda.'%');
        }

        $elements = $elements->paginate(5)->appends(request()->except('page'));

        //vuelve a la pagina
        return view('Producciones.producciones', ['elements' => $elements, 'tipo'=>$tipo]);
    }

    public function produccion($id)
    {
        //decripta el id
        try{
            $decryptedId = \Crypt::decrypt($id);
        }
        catch(\Exception $e){
            abort(404);
        }

        //encuentra la produccion y el tipo
        $element = Production::findOrFail($decryptedId);
        if ($element->tipo == 'producción') {
            $tipo = 'PRODUCCIÓN';
        } else {
            $tipo = 'COPRODUCCIÓN';
        }

        //muestra la pagina
        return view('Producciones.produccion', ['element' => $element, 'tipo' => $tipo]);
    }
}