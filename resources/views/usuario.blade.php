<!DOCTYPE html>
<html>
<head>
	<title>USUARIO - Loja Online</title>
</head>
<body>
	@foreach ($usr as $usuario)
		<p>Email: {{$usuario->USU_EMAIL}}</p>
		<p>Senha: {{$usuario->USU_SENHA}}</p>
	@endforeach
	<a href="{{route('cad-usuario')}}">CADASTRAR</a>
</body>
</html>
