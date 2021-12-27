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
	<div id = "box">
		<form id = "box-form" action = "testLogin.php" method = "POST">
			<h1>Login:</h1>
			<input type = "text" name = "inputEmail" placeholder = "E-mail">
			<input type = "password" name = "inputPassword" placeholder="Senha">
			<input type = "submit" class = box-inputSubmit name = "inputSubmit" value = "Fazer Login">
			<a id = "box-button-back" href = "index.php">Voltar</a>
		</form>
	</div>
</body>
</html>