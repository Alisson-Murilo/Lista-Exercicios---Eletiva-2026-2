@extends('layout')
@section('titulo', 'exercicio17')
@section('conteudo')

        <h1>Exercicio 17</h1>
        <form method="post" action="/exer17resp">
            <div class="mb-3">
                <label for="capital" class="form-label">informe o valor do capital: </label>
                <input type="number" id="capital" name="capital" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="taxa" class="form-label">informe a taxa de juros: </label>
                <input type="number" id="taxa" name="taxa" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="periodo" class="form-label">informe o periodo: </label>
                <input type="number" id="periodo" name="periodo" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($juros)
            <p> Juros a pagar: R$ {{ $juros }} </p>
        @endisset
        
@endsection