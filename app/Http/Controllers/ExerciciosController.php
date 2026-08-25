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
    ---               EXERCÍCIO 04               ---
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

    /*----------------------------------------------
    ---               EXERCÍCIO 05               ---
    ----------------------------------------------*/

    public function abrirFormExer5(){
        return view('exer5');
    }

    public function respostaExer5(Request $request){
        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        return view('exer5', ['media' => $media]);
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 06               ---
    ----------------------------------------------*/

    public function abrirFormExer6(){
        return view('exer6');
    }
    
    public function respostaExer6(Request $request){
        $tempC = $request->tempC;
        $tempF = $tempC * 1.8 + 32;
        return view('exer6', ['tempF' => $tempF]); 
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 07               ---
    ----------------------------------------------*/

    public function abrirFormExer7(){
        return view('exer7');
    }
    
    public function respostaExer7(Request $request){
        $tempF = $request->tempF;
        $tempC = ($tempF - 32) / 1.8;
        return view('exer7', ['tempC' => $tempC]); 
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 08               ---
    ----------------------------------------------*/

    public function abrirFormExer8(){
        return view('exer8');
    }
    
    public function respostaExer8(Request $request){
        $largura = $request->largura;
        $altura = $request->altura;
        $area = $largura * $altura;
        return view('exer8', ['area' => $area]); 
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 09               ---
    ----------------------------------------------*/

    public function abrirFormExer9(){
        return view('exer9');
    }
    
    public function respostaExer9(Request $request){
        $raio = $request->raio;
        $area = ($raio ** 2) * pi();
        return view('exer9', ['area' => $area]); 
    }
}
