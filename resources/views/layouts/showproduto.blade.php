@extends('layouts.layout')
 
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h2 class="text-center">Produto</h2>
    </div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
        <a class="btn btn-primary" href="{{ route('produto.index') }}">Voltar</a>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nome Produto:</strong>
            {{ $produto->nome_produto }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Valor:</strong>
            {{ $produto->valor_produto }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Quantidade:</strong>
            {{ $produto->quantidade}}
        </div>
    </div>
</div>



@endsection