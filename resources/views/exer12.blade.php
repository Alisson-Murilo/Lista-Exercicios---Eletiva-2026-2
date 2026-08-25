@extends('layout')
@section('titulo', 'exercicio12')
@section('conteudo')

        <h1>Exercicio 12</h1>
        <form method="post" action="/exer12resp">
            <div class="mb-3">
                <label for="base" class="form-label">informe a base para ser elevada ao exponte: </label>
                <input type="number" id="base" name="base" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="expoente" class="form-label">informe o expoente: </label>
                <input type="number" id="expoente" name="expoente" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($potencia)
            <p> Resultado da potência: {{ $potencia }} </p>
        @endisset
        
@endsection