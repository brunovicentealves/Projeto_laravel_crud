<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Produto;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $produtos = Produto::all();
        return view('layouts.index',compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.createproduto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
      
        $produto = new Produto();
        $produto -> nome_produto = $request->nome_produto;
        $produto -> valor_produto = $request->valor_produto;
        $produto -> quantidade = $request->quantidade;

        $produto ->save();


        return redirect()->route('produto.index')->with('success','Produto cadastrado!');


        dd('Estou aqui em: CategoryController no método store()');
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        return view('layouts.showproduto',compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Produto $produto)
    {
        return view('layouts.editproduto',compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $produto)
    {
        

        $produto->update($request->all());
        return redirect()->route('produto.index')->with('success','atualizado com sucesso o sistema');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( Produto $produto)
    {
        
        $produto->delete();
        return redirect()->route('produto.index')
                        ->with('success','Produto deletado com sucesso !');
    }
}
