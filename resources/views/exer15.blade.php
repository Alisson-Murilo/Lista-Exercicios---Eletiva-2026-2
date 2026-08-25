@extends('layout')
@section('titulo', 'exercicio15')
@section('conteudo')

        <h1>Exercicio 15</h1>
        <form method="post" action="/exer15resp">
            <div class="mb-3">
                <label for="peso" class="form-label">informe o seu peso (em kg): </label>
                <input type="number" id="peso" name="peso" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">informe a sua altura (em metros): </label>
                <input type="number" id="altura" name="altura" class="form-control" required="" step="any">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($imc)
            <p> IMC calculado: {{ $imc }} </p>
        @endisset
        
@endsection