<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel = "stylesheet" href = "css/style.css">
	<link rel = "stylesheet" href = "css/login.css">
</head>
<body>
	<a href = "index.php">Voltar</a>
	<div id = "box">
		<fieldset>
			<legend>Login</legend>
			<form action = "testLogin.php" method = "POST">
				<input type = "text" name = "inputEmail" placeholder = "E-mail">
				<br>
				<input type = "password" name = "inputPassword" placeholder="Senha">
				<br><br>
				<button class = box-inputSubmit name = "inputSubmit">Fazer Login</button>
			</form>
		</fieldset>
	</div>
</body>
</html>