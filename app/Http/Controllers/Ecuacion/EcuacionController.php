<?php

namespace App\Http\Controllers\Ecuacion;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EcuacionController extends Controller
{
    public function index(Request $request) {
        
        return view('ecuacion.index');
    }

    public function store(Request $request) {

        $a = $request->a;
        $b = $request->b;

        $valor = ['mis valores', $a, $b];

        /*$ecuacion = new Ecuacion();
        $ecuacion->setA($a);
        $ecuacion->setB($b);
        $solucion = $ecuacion->solucion();*/

        return $valor;
        //dd($valor);
    }
}
