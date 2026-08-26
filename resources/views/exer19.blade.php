@extends('layout')
@section('titulo', 'exercicio19')
@section('conteudo')

        <h1>Exercicio 1</h1>
        <form method="post" action="/exer19resp">
            <div class="mb-3">
                <label for="dias" class="form-label">Digite uma quantidade de dias: </label>
                <input type="number" id="dias" name="dias" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($horas, $minutos, $segundos)
            <p> Essa quantidade de dias equivale a: {{ $horas }} horas, {{ $minutos }} minutos, e {{ $segundos }} segundos. </p>
        @endisset
        
@endsection