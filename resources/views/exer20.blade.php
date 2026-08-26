@extends('layout')
@section('titulo', 'exercicio20')
@section('conteudo')

        <h1>Exercicio 20</h1>
        <form method="post" action="/exer20resp">
            <div class="mb-3">
                <label for="distancia" class="form-label">informe uma distância (em metros): </label>
                <input type="number" id="distancia" name="distancia" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="tempo" class="form-label">informe um tempo (em segundos): </label>
                <input type="number" id="tempo" name="tempo" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($vel)
            <p> Velocidade Média: {{ $vel }} m/s </p>
        @endisset
        
@endsection