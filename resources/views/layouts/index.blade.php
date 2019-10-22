@extends('layouts.layout')
 
@section('content')
    <h2>Produtos Cadastrados</h2>
    @if ($message = Session::get('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <p>{{ $message }}</p>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    @endif
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Id produto </th>
        <th scope="col">Nome</th>
        <th scope="col">Preço</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Ações </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produtos as $pro)
      <tr>
        <th scope="row">{{$pro->id}}</th>
        <td>{{$pro->nome_produto}}</td>
        <td>{{$pro->valor_produto}}</td>
        <td>{{$pro->quantidade}}</td>
        <td>
          <form action="{{ route('produto.destroy',$pro->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('produto.show',$pro->id) }}">Detalhes</a>
            <a class="btn btn-primary" href="{{ route('produto.edit',$pro->id)}}">Editar</a>
            
            @csrf
            @method('DELETE')

            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </td>
      </tr>
      <tr>
          @endforeach
    </tbody>
  </table>

@endsection