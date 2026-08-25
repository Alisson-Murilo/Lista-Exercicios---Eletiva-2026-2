@extends('layout')
@section('titulo', 'exercicio6')
@section('conteudo')

        <h1>Exercicio 6</h1>
        <form method="post" action="/exer6resp">
            <div class="mb-3">
                <label for="tempC" class="form-label">Digite a temperatura em Celcius: </label>
                <input type="number" id="tempC" name="tempC" class="form-control" required="">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($tempF)
            <p> Temperatura em Fahrenheit: {{ $tempF }} </p>
        @endisset
        
@endsection