
<div class="jumbotron">
	<h1 class="display-4">Cadastrar Produto</h1>
	<hr class="my-4">
	<form action="/controller/cadastrarProduto/" method="GET">
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome"  aria-describedby="emailHelp" placeholder="Digite o nome">
    
  </div>
  <div class="form-group">
    <label for="qtde">Quantidade</label>
    <input type="number" class="form-control" name="qtde" id="qtde" placeholder="Digite a quantidade">
  </div>

  <label for="fornecedor_id">Fornecedor</label>
  <select class="form-control">

@foreach($fornecedor as $fornecedor)

    <option value="{{ $fornecedor->id }}" id="fornecedor_id" name="fornecedor_id">
        {{ $fornecedor->nome }} - {{$fornecedor->id}}
    </option>

@endforeach

</select>

  <button type="submit" class="btn btn-primary mt-4">Enviar</button>
</form>
	
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

