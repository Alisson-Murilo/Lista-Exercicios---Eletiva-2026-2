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

    /*----------------------------------------------
    ---               EXERCÍCIO 10               ---
    ----------------------------------------------*/

    public function abrirFormExer10(){
        return view('exer10');
    }
    
    public function respostaExer10(Request $request){
        $largura = $request->largura;
        $altura = $request->altura;
        $perimetro = $largura * 2 + $altura * 2;
        return view('exer10', ['perimetro' => $perimetro]); 
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 11               ---
    ----------------------------------------------*/

    public function abrirFormExer11(){
        return view('exer11');
    }
    
    public function respostaExer11(Request $request){
        $raio = $request->raio;
        $perimetro = 2 * pi() * $raio;
        return view('exer11', ['perimetro' => $perimetro]); 
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 12               ---
    ----------------------------------------------*/

    public function abrirFormExer12(){
        return view('exer12');
    }
    
    public function respostaExer12(Request $request){
        $base = $request->base;
        $expoente = $request->expoente;
        $potencia = $base ** $expoente;
        return view('exer12', ['potencia' => $potencia]); 
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 13               ---
    ----------------------------------------------*/

    public function abrirFormExer13(){
        return view('exer13');
    }

    public function respostaExer13(Request $request){
        $metros = $request->metros;
        $valorCm = $metros * 100;
        return view('exer13', ['valorCm' => $valorCm]);
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 14               ---
    ----------------------------------------------*/

    public function abrirFormExer14(){
        return view('exer14');
    }

    public function respostaExer14(Request $request){
        $km = $request->km;
        $valorM = $km * 0.621371;
        return view('exer14', ['valorM' => $valorM]);
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 15               ---
    ----------------------------------------------*/

    public function abrirFormExer15(){
        return view('exer15');
    }

    public function respostaExer15(Request $request){
        $peso = $request->peso;
        $altura = $request->altura;
        $imc = $peso / ($altura ** 2);
        return view('exer15', ['imc' => $imc]);
    }

    /*----------------------------------------------
    ---               EXERCÍCIO 16               ---
    ----------------------------------------------*/

    public function abrirFormExer16(){
        return view('exer16');
    }

    public function respostaExer16(Request $request){
        $preco = $request->preco;
        $desc = $request->desc;
        $novoPreco = $preco - ($preco * ($desc / 100));
        return view('exer16', ['novoPreco' => $novoPreco]);
    }
}

