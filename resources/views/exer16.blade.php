@extends('layout')
@section('titulo', 'exercicio16')
@section('conteudo')

        <h1>Exercicio 16</h1>
        <form method="post" action="/exer16resp">
            <div class="mb-3">
                <label for="preco" class="form-label">informe um preço: </label>
                <input type="number" id="preco" name="preco" class="form-control" required="">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">informe um percentual de deconto: </label>
                <input type="number" id="desc" name="desc" class="form-control" required="">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
     
        @isset($novoPreco)
            <p> Preço Atualizado: R$ {{ $novoPreco }} </p>
        @endisset
        
@endsection