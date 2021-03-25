<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>

		<meta charset="utf-8">
	</head>
	<body>
		@if($errors->count() > 0)
		<div>
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		</div>
		@endif

		<form method="POST" action="{{ route('login') }}">
			@csrf
			<div>
				<label for="email">Email</label>
				<input id="email"type="email" name="email" required autofocus>
			</div>

			<div>
				<label for="password">Senha</label>
				<input id="password" type="password" name="password" required>
			</div>

			<div>
				<label for="remember_me">
					<input id="remember_me" type="checkbox" name="remember">
					<span>Lembre-se de mim</span>
				</label>
			</div>

			<button type="submit">Login</button>
		</form>
	</body>
</html>
