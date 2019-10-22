@extends('layouts.layout')
 
@section('content')
<h2>Cadastro de Produtos</h2>

<form  role="form"  method="POST" action="{{ route('produto.store') }}">
        @csrf
        <div class="form-group">
          <label >Nome Produto</label>
          <input type="text" class="form-control" name="nome_produto"  placeholder="Nome">
        </div>
        <div class="form-group">
          <label>Preco</label>
          <input type="text" class="form-control" name="valor_produto" placeholder="Preço">
        </div>
        <div class="form-group">
                <label>Quantidade</label>
                <input type="text" class="form-control" name="quantidade" placeholder="Quantidade">
              </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </form>
@endsection