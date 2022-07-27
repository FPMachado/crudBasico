<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function store(Request $request)
    {
       Produto::create([
            'nome' => $request->nome,
            'custo' => $request->custo,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
       ]);

       return redirect('/produto/listar');  
    }

    public function show($id)
    {
        $produto = Produto::findOrFail($id);
        
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('produtos.edit', ['produto' => $produto]);       
    }

    //A função de update tem o request pq ela precisa receber as informações enviadas do formulário para inserir no banco
    public function update(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->update([
            'nome'          =>  $request->nome,
            'custo'         => $request->custo,
            'preco'         => $request->preco,
            'quantidade'    => $request->quantidade
        ]);

        return redirect("/produto/ver/{$request->id}");
    }

    public function delete($id)
    {
        $produto = Produto::findOrFail($id);

        return view('produtos.delete', ['produto' => $produto]);
    }

    public function destroy(Request $request, $id)
    {
        $produto = Produto::findOrFail($id);

        $produto->delete();

        return "Produto Excluido com Sucesso";
    }

    public function index()
    {
        $produtos = Produto::all();
        

        foreach ($produtos as $key => $produto) {
            $produto->id;
            $produto->nome;
            $produto->custo;
            $produto->preco;
            $produto->quantidade;

            return view('produtos.index',compact('produtos'));
        }
    }
}
