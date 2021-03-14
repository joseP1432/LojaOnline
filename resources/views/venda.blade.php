<!DOCTYPE html>
<html>
<head>
	<title>VENDAS - Loja Online</title>
</head>
<body>
	@foreach ($ven as $venda)
		<p>Quantidade: {{$venda->VEN_QUANTIDADE}}</p>
		<p>Produto: {{$venda->VEN_PRO_CODIGO}}</p>
	@endforeach
	<a href="{{route('cad-venda')}}">Cadastrar</a>
</body>
</html>