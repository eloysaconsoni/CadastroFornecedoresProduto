<?php

namespace App\Http\Controllers;

use App\Fornecedor;
use Illuminate\Http\Request;


class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $fornecedor;

    public function __construct(Fornecedor $fornecedor){
        $this->fornecedor = $fornecedor;
    }
    public function index()
    {
        $title = 'Lista de fornecedores';
        $fornecedor = $this->fornecedor->all();

        
        return view ('listarFornecedor', compact('fornecedor', 'title'));
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
    {   Fornecedor::create($request->all());
        
        
     return redirect('/controller/visualizarFornecedor/');
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show(Fornecedor $fornecedor)
    {
        $fornecedors = $fornecedor->all();
    if($fornecedors){
    
        for($i = 0; $i <  count($fornecedors); $i++){
            echo $fornecedors[$i];
            echo '<br>';
            }
        }
        else
        return ("Não existe fornecedors cadastrados");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function edit($fornecedor)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Fornecedor::where('id', $id)->update($request->all());
        return redirect('/controller/visualizarFornecedor/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fornecedor  $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Fornecedor::find($id);
        $id->delete();

        return redirect('/controller/visualizarFornecedor/');
    }
}
