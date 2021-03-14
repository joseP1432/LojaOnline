<!DOCTYPE html>
<html>
<head>
	<title> FORNECEDORES - Loja Online </title>
</head>
<body>
	@foreach ($for as $fornecedor)
		<p>Nome: {{$fornecedor->FOR_NOME}}</p>
	@endforeach
	<a href="{{route('cad-fornecedor')}}">CADASTRAR</a>
</body>
</html>