<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        return response()->json(Produto::all());
    }

    public function show(int $id)
    {
        $produto = Produto::find($id);

        if (!$produto) {
            return response()->json(['erro' => 'Produto não encontrado'], 404);
        }

        return response()->json($produto);
    }

    public function store(Request $request)
    {
        $request -> validate([
            'nome'=>'required|string|max:255',
            'preco'=>'required|numeric|min:0',
        ]);

        $produto = Produto::create($request->all());
        return response()->json($produto, 201);
    }

    public function update(Request $request, int $id)
    {
        $produto = Produto::find($id);
        
        if (!$produto) {
            return response()->json(['erro' => 'Produto não encontrado'], 404);
        }

        $request->validate([
            'nome'=>'sometimes|string|max:255',
            'preco'=>'sometimes|numeric|min:0',
        ]);

        $produto->update($request->all());
        return response()->json($produto);
    }

    public function destroy(int $id)
    {
        $produto = Produto::destroy($id);
        return response()->json(['mensagem' => 'Produto deletado']);
    }
}