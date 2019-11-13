@extends ('template.template')

@section('content')

<h1 class="title-pg"> Lista dos cadastros<h1>
<a href="/cadastrarFornecedor"><button type="button" class="btn btn-info"> + Cadastrar</button></a>
<table class="table table-striped">
<tr>
<th>Nome</th>
<th>Telefone</th>
<th width="100px">Ações</th>
</tr>
@foreach($fornecedor as $fornecedor)
<tr>
<td>{{$fornecedor->nome}}</td>
<td>{{$fornecedor->telefone}}</td>
<td>
 <a href="/controller/editarFornecedor/{{$fornecedor->id}}">Edit</a>
  <a href="/controller/excluirFornecedor/{{$fornecedor->id}}">Del</a> 
</td>
</tr>
@endforeach
</table>
@endsection