<!DOCTYPE html>
<html>
<head>
	<title> CADASTRAR USUARIO - Loja Online </title>
</head>
<body>
	<form action="{{route('store-usuario')}}" method="POST">
		@csrf
		<div>
			<label> Email </label>
			<input type="text" name="email" id="email" value="{{@$usr->USU_EMAIL}}">
		</div>
		<div>
			<label> Senha </label>
			<input type="password" name="senha" id="senha" value="{{@$usr->USU_SENHA}}">
		</div>		
		<button type="submit">Enviar</button>
	</form>
<div>
	<a href="{{route('usuario')}}">Voltar</a>
</div>
	
</body>
</html>