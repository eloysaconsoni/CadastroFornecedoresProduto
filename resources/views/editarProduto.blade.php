
<div class="jumbotron">
	<h1 class="display-4">Editar Produto</h1>
	<hr class="my-4">
	<form action="/controller/updateProduto/{{$id}}" method="GET">
  <div class="form-group">

    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nome" name="nome" value="{{$nome}}" placeholder="Digite o nome">
  </div>
  <div class="form-group">
    <label for="qtde">Quantidade</label>
    <input type="number" class="form-control" name="qtde" id="qtde" value="{{$qtde}}" placeholder="Digite a quantidade">
  </div>
  <div class="form-group">
    <label for="fornecedor_id">Fornecedor</label>
    <input type="text" class="form-control" id="fornecedor_id" value="{{$fornecedor_id}}" name="fornecedor_id">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
	
</div>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

