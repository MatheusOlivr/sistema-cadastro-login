<?php 
	$dbHost ="localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "sistema_cadastro";
	$conexao = new PDO("mysql:host=".$dbHost.";dbname=".$dbName,$dbUser,$dbPass);	
?>