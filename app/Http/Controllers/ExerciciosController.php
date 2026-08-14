<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    /*----------------------------------------------
    ---               EXERCÍCIO 01               ---
    ----------------------------------------------*/

    public function abrirFormExer1(){
        return view('exer1');
    }

    public function respostaExer1(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $soma = $valor1 + $valor2;
        return view('exer1', ['soma' => $soma]);
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 02               ---
    ----------------------------------------------*/

    public function abrirFormExer2(){
        return view('exer2');
    }

    public function respostaExer2(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $subtr = $valor1 - $valor2;
        return view('exer2', ['subtr' => $subtr]);
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 03               ---
    ----------------------------------------------*/

    public function abrirFormExer3(){
        return view('exer3');
    }

    public function respostaExer3(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $mult = $valor1 * $valor2;
        return view('exer3', ['mult' => $mult]);
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 03               ---
    ----------------------------------------------*/

    public function abrirFormExer4(){
        return view('exer4');
    }

    public function respostaExer4(Request $request){
        $valor1 = $request->valor1;
        $valor2 = $request->valor2;
        $div = $valor1 / $valor2;
        return view('exer4', ['div' =>$div]);
    }
}
