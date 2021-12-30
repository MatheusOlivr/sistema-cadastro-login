<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "css/style.css">
	<link rel = "stylesheet" href = "css/cadastro.css">
	<title>Cadastro</title>
</head>
<body>
    <div id="box">
        <form id = "box-form"action="formulario.php" method="POST">
		    <h1>Cadastro:</h1>
		    <div class="inputBox">
		        <input type="text" name="nome" id="nome" class="inputUser" required>
		        <label for="nome" class="labelInput">Nome completo</label>
		    </div>
		    <div class="inputBox">
		        <input type="password" name="senha" id="senha" class="inputUser" required>
		        <label for="senha" class="labelInput">Senha</label>
		    </div>
		    <div class="inputBox">
		        <input type="text" name="email" id="email" class="inputUser" required>
		        <label for="email" class="labelInput">Email</label>
		    </div>
		    <div class="inputBox">
		        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
		        <label for="telefone" class="labelInput">Telefone</label>
		    </div>
		    <p>Sexo:</p>
		    <input type="radio" id="feminino" name="genero" value="feminino" required>
		    <label for="feminino">Feminino</label>
		    <input type="radio" id="masculino" name="genero" value="masculino" required>
		    <label for="masculino">Masculino</label>
		    <input type="radio" id="outro" name="genero" value="outro" required>
		    <label for="outro">Outro</label>
		    <label for="data_nascimento"><b>Data de Nascimento:</b></label>
		    <input type="date" name="data_nascimento" id="data_nascimento" required>
		    <div class="inputBox">
		        <input type="text" name="cidade" id="cidade" class="inputUser" required>
		        <label for="cidade" class="labelInput">Cidade</label>
		    </div>
		    <div class="inputBox">
		        <input type="text" name="estado" id="estado" class="inputUser" required>
		        <label for="estado" class="labelInput">Estado</label>
		    </div>
		    <div class="inputBox">
		        <input type="text" name="endereco" id="endereco" class="inputUser" required>
		        <label for="endereco" class="labelInput">Endereço</label>
		    </div>
		    <input type="submit" name="submit" id="submit">
			<a id = "box-button-back" href="index.php">Voltar</a>
        </form>
    </div>
</body>
</html>