@extends('layouts.layout')
 
@section('content')
<h2>Editar Produto </h2>

<form  role="form"  method="POST" action="{{ route('produto.update',$produto->id) }}">
    @csrf
    @method('PUT')
        <div class="form-group">
          <label >Nome Produto</label>
        <input type="text" class="form-control" name="nome_produto" value="{{$produto->nome_produto}}" placeholder="Nome">
        </div>
        <div class="form-group">
          <label>Preco</label>
        <input type="text" class="form-control" name="valor_produto"  value="{{$produto->valor_produto}}"placeholder="Preço">
        </div>
        <div class="form-group">
                <label>Quantidade</label>
        <input type="text" class="form-control" name="quantidade" value="{{$produto->quantidade}}" placeholder="Quantidade">
              </div>
        <button type="submit" class="btn btn-success">Cadastrar</button>
      </form>
@endsection