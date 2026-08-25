@extends('layout')
@section('titulo', 'exercicio8')
@section('conteudo')

        <h1>Exercicio 8</h1>
        <form method="post" action="/exer8resp">
            <div class="mb-3">
                <label for="largura" class="form-label">informe a largura de um retângulo: </label>
                <input type="number" id="largura" name="largura" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="altura" class="form-label">informe a altura desse retângulo: </label>
                <input type="number" id="altura" name="altura" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($area)
            <p> Área do retângulo: {{ $area }} </p>
        @endisset
        
@endsection