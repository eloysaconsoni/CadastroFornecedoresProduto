<?php

namespace App\Http\Controllers;

use App\Produto;
use Illuminate\Http\Request;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $produto;

    public function __construct(Produto $produto){
        $this->produto = $produto;
    }
    public function index()
    {
        $title = 'Lista de produtos';
        $produto = $this->produto->all();

        
        return view ('listarProduto', compact('produto', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   Produto::create($request->all());
        
        
     return redirect('/controller/visualizarProduto/');
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function show(Produto $produto)
    {
        $produtos = $produto->all();
    if($produtos){
    
        for($i = 0; $i <  count($produtos); $i++){
            echo $produtos[$i];
            echo '<br>';
            }
        }
        else
        return ("Não existe produtos cadastrados");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function edit($produto)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Produto::where('id', $id)->update($request->all());
        return redirect('/controller/visualizarProduto/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produto  $produto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Produto::find($id);
        $id->delete();

        return redirect('/controller/visualizarProduto/');
    }
}
