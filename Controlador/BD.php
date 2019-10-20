<?php

	function conexion(){
		$result = new mysqli('localhost', 'root', '', 'Login'); 
   		if (!$result)
     		throw new Exception('<h1>No se Pudo Conectar con la BD</h1>');
   		else
     		return $result;
	}

	class BD
	{
		private $host;
		private $db;
		private $user;
		private $pass;
		private $charset;

		public function __construct()
		{
			$this->host = 'localhost';
			$this->db = 'login';
			$this->user = 'root';
			$this->pass = '';
			$this->charset = 'utf8_spanish2_ci';
		}
		public function conexionPDO(){
		try {
			$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
						PDO::ATTR_EMULATE_PREPARES => false
			];
    		$pdo = new PDO('mysql:host=localhost;dbname=login', 'root', '', $options);
    		return $pdo;
		} catch (PDOException $e) {
    		echo 'Falló la conexión: ' . $e->getMessage();
    		die();
			}
		}
	}
	 
?>