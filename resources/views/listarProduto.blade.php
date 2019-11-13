@extends ('template.template')

@section('content')

<h1 class="title-pg"> Lista dos cadastros<h1>
<a href="/cadastrarProduto"><button type="button" class="btn btn-info"> + Cadastrar</button></a>
<table class="table table-striped">
<tr>
<th>Nome</th>
<th>Quantidade</th>
<th> Código do Fornecedor</th>
<th width="100px">Ações</th>
</tr>
@foreach($produto as $produto)
<tr>
<td>{{$produto->nome}}</td>
<td>{{$produto->qtde}}</td>
<td>{{$produto->fornecedor_id}}</td>
<td>
 <a href="/controller/editarProduto/{{$produto->id}}">Edit</a>
  <a href="/controller/excluirProduto/{{$produto->id}}">Del</a> 
</td>
</tr>
@endforeach
</table>
@endsection