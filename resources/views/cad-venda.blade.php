<!DOCTYPE html>
<html>
<head>
	<title> CADASTRAR VENDAS - Loja Online </title>
</head>
<body>
	<form action="{{route('store-venda')}}" method="POST">
		@csrf
		<div>
			<label> Quantidade </label>
			<input type="text" name="qntd" id="qntd" value="{{@$ven->VEN_QUANTIDADE}}">
		</div>
		<div>
			<label>Produto</label>
			<input type="text" name="prod" id="prod" value="{{@$ven->VEN_PRO_CODIGO}}">
		</div>	
		<button type="submit">Enviar</button>
	</form>
<div>
	<a href="{{route('venda')}}">Voltar</a>
</div>
	
</body>
</html>