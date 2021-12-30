<?php 
	class Connect
	{
		protected $dbHost ="localhost";
		protected $dbUser = "root";
		protected $dbPass = "";
		protected $dbName = "sistema_cadastro";
		public function getDb()
		{
			$conexao = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName,$this->dbUser,$this->dbPass);
			return $conexao;
		}
	}
	$teste = new Connect;
	$teste->getDb();
?>