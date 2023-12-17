<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/login.css')}}">
    <title>Login</title>
</head>
<body>

    <h2 style="color: aliceblue">Bem Vindo ao Projeto Condominium</h2>

<div class="container" id="container">

	<div class="form-container sign-up-container">
		<form>
			<h1>Crie sua conta</h1>


			<input type="text" placeholder="Name" />
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<button>Sign Up</button>
		</form>
	</div>

	<div class="form-container sign-in-container">
		<form action="{{route('Log In')}}" method="POST" >
            @csrf
			<h1>Logar</h1>


			<input type="email" placeholder="Email"  name="email"/>
			<input type="password" placeholder="Password" name="password"/>
			<a href="#">Esqueceu a senha?</a>
			<button>Sign In</button>
		</form>
	</div>

	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Bem Vinda Novamente</h1>
				<p>Para continuar logado entre com suas credencias</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>

			<div class="overlay-panel overlay-right">
				<h1>Olá!</h1>
				<p>Registre-se com poucos dados e entre na jornada</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>

</div>

<footer>
	<p>

	</p>
</footer>


<!--Injetando configurações javascript-->

<script src="{{asset('/js/login.js')}}"> </script>
  </body>

</html>
