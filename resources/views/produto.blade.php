<!DOCTYPE html>
<html>
<head>
	<title>PRODUTOS - Loja Online</title>
</head>
<body>
	@foreach ($pro as $produto)
		<p>Nome: {{$produto->PRO_NOME}}</p>
		<p>Descrição: {{$produto->PRO_DESCRICAO}}</p>
		<p>Preço de Compra: {{$produto->PRO_PRECOCOMPRA}}</p>
		<p>Preço de Venda: {{$produto->PRO_PRECOVENDA}}</p>
		<p>Quantidade: {{$produto->PRO_QUANTIDADE}}</p>
		<p>Fornecedor: {{$produto->PRO_FOR_CODIGO}}</p>
	@endforeach
	<a href="{{route('cad-produto')}}">CADASTRAR</a>
</body>
</html>
