<?php 
	include_once 'BD.php';
	Class User extends BD
	{
		public $usuario;
		public $nombre;
		public $Correo;
//---------------------------Comprueba si el Uusario escrito Existe en la BD----------------------
		public function ExistUsuario($usu, $pass){
			$query = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Usuario = :usu");
			$query->execute(['usu' =>$usu]);

			foreach ($query as $rows) {
				if ($usu === $rows['Usuario'] && password_verify($pass, $rows['Password']))
					return true;
				else 
					return false;
			}
		}
//---------------------------Comprueba si el Correo escrito Existe en la BD-------------------------
		public function ExistCorreo($cor, $pass){
			$querycorr = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Correo = :cor");
			$querycorr->execute(['cor' =>$cor]);

			foreach ($querycorr as $rows) {
				if ($cor === $rows['Correo'] && password_verify($pass, $rows['Password']))
					return true;
				else 
					return false;
			}
		}

		public function setUsuario($usuarios){
			$sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Usuario = :usuarios");
			$sql->execute(['usuarios' =>$usuarios]);

			foreach ($sql as $row) {
				$this->nombre = $row['Nombre'];
				$this->usuario = $row['Usuario'];
				$this->Correo = $row['Correo'];
			}
		}

		public function setCorreo($correo){
			$sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Correo = :correo");
			$sql->execute(['correo' =>$correo]);

			foreach ($sql as $row) {
				$this->nombre = $row['Nombre'];
				$this->usuario = $row['Usuario'];
				$this->Correo = $row['Correo'];
			}
		}

		public function getUsuario(){
			return $this->nombre;
			return $this->usuario;
			return $this->Correo;
		}
	}
 ?>