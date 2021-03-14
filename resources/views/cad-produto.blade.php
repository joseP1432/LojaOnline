<!DOCTYPE html>
<html>
<head>
	<title> CADASTRAR PRODUTO - Loja Online </title>
</head>
<body>
	<form action="{{route('store-produto')}}" method="POST">
		@csrf
		<div>
			<label> Nome </label>
			<input type="text" name="nome" id="nome" value="{{@$pro->PRO_NOME}}">
		</div>
		<div>
			<label>Descrição</label>
			<input type="text" name="desc" id="desc" value="{{@$pro->PRO_DESCRICAO}}">
		</div>
		<div>
			<label>Preço de Compra:</label>
			<input type="text" name="pcompra" id="pcompra" value="{{@$pro->PRO_PRECOCOMPRA}}">
		</div>	
		<div>
			<label>Preço de Venda</label>
			<input type="text" name="pvenda" id="pvenda" value="{{@$pro->PRO_PRECOVENDA}}">
		</div>	
		<div>
			<label>Quantidade</label>
			<input type="text" name="qntd" id="qntd" value="{{@$pro->PRO_QUANTIDADE}}">
		</div>
		<div>
			<label>Fornecedor</label>
			<input type="text" name="for" id="for" value="{{@$pro->PRO_FOR_CODIGO}}">
		</div>			
		<button type="submit">Enviar</button>
	</form>
<div>
	<a href="{{route('produto')}}">Voltar</a>
</div>
	
</body>
</html>