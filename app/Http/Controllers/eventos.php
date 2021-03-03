<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class eventos extends Controller
{
    //
    public function index(){
    
    $eventos = Event::get();
    return view('eventos', ['eventos'=>$eventos]);        
    }
}
