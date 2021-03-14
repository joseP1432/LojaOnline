<!DOCTYPE html>
<html>
<head>
	<title> CADASTRAR FORNECEDOR - Loja Online </title>
</head>
<body>
	<form action="{{route('store-fornecedor')}}" method="POST">
		@csrf
		<div>
			<label> Nome </label>
			<input type="text" name="nome" id="nome" value="{{@$for->FOR_NOME}}">
		</div>		
		<button type="submit">Enviar</button>
	</form>
<div>
	<a href="{{route('fornecedor')}}">Voltar</a>
</div>
	
</body>
</html>