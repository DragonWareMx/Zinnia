<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyect;

class ProjectController extends Controller
{
    public function index(Request $request){
        //si no hay búsqueda se muestra la página
        if(!$request->busqueda){
            $elements = Proyect::paginate(5);
            $tipo = 'PROYECTOS';
            return view('Producciones.producciones', ['elements' => $elements, 'tipo'=>$tipo]);
        }

        //obtenemos todas las producciones
        $elements=Proyect::select('*');
        $tipo = 'PROYECTOS';

        //realiza la busqueda
        if(isset($request->busqueda)){
            $elements = $elements->where('titulo','like','%'.$request->busqueda.'%')
            ->orWhere('descripcion','like','%'.$request->busqueda.'%')
            ->orWhere('masinfo','like','%'.$request->busqueda.'%');
        }

        $elements = $elements->paginate(5)->appends(request()->except('page'));

        //vuelve a la pagina
        return view('Producciones.producciones', ['elements' => $elements, 'tipo'=>$tipo]);
    }

    public function proyecto($id)
    {
        //decripta el id
        try{
            $decryptedId = \Crypt::decrypt($id);
        }
        catch(\Exception $e){
            abort(404);
        }

        //encuentra la produccion y el tipo
        $element = Proyect::findOrFail($decryptedId);
        $tipo = 'PROYECTO';

        //muestra la pagina
        return view('Producciones.produccion', ['element' => $element, 'tipo' => $tipo]);
    }
}
