@extends('layout')
@section('titulo', 'exercicio14')
@section('conteudo')

        <h1>Exercicio 14</h1>
        <form method="post" action="/exer14resp">
            <div class="mb-3">
                <label for="km" class="form-label">Digite um valor em quilometros: </label>
                <input type="number" id="km" name="km" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($valorM)
            <p> Valor convertido para milhas: {{ $valorM }} milhas </p>
        @endisset
        
@endsection