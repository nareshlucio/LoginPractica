<?php 
	require_once 'BD.php';
	class Consultas extends BD
	{
		public function RegistroUsu($Ap, $Am, $nom, $usu, $corr, $pass, $gen, $num, $edad, $Tipo_Usuario){
			$query = $this->conexionPDO()->prepare("INSERT INTO usuarios(Apellido_P, Apellido_M, Nombre, Usuario, Correo, Password, Genero, Telefono, Edad, Tipo_Usuario) VALUES (:Ape_P,:Ape_M,:nombre,:Usu,:Corr,:Pas,:Gen,:tel,:Edad,:tip)");

			if($query->execute(["Ape_P"=>$Ap, "Ape_M"=>$Am, "nombre"=>$nom, "Usu"=>$usu, "Corr"=>$corr, "Pas"=>$pass, "Gen"=>$gen, "tel"=>$num, "Edad"=>$edad, "tip"=>$Tipo_Usuario]))
				return true;
			else {
				return false;
			}
		}

		public function ActualizarUsu($UsuOri,$Ap, $Am, $nom, $usu, $corr, $num, $edad, $Tipo_Usuario){
			$query = $this->conexionPDO()->prepare("UPDATE usuarios SET Apellido_P=:Ape_P,Apellido_M=:Ape_M,Nombre=:nombre,Usuario=:Usu,Correo=:Corr,Telefono=:tel,Edad=:Edad,Tipo_Usuario=:tip WHERE Id_usuario=:UsuOri");

			if($query->execute(["Ape_P"=>$Ap, "Ape_M"=>$Am, "nombre"=>$nom, "Usu"=>$usu, "Corr"=>$corr, "tel"=>$num, "Edad"=>$edad, "tip"=>$Tipo_Usuario, "UsuOri"=>$UsuOri]))
				return true;
			else {
				return false;
			}
		}

		public function EliminarUsu($UsuOri){
			$query = $this->conexionPDO()->prepare("DELETE FROM usuarios WHERE Usuario = :UsuOri");

			if($query->execute(["UsuOri"=>$UsuOri]))
				return true;
			else {
				return false;
			}
		}

		public function Tip_Usu($Usuario){
			$valor;
			$SQL = $this->conexionPDO()->prepare("SELECT Tipo_Usuario FROM usuarios WHERE Usuario= :ali");
			$SQL->execute(['ali'=>$Usuario]);
			foreach ($SQL as $row) {
				$valor = $row['Tipo_Usuario'];
			}
			if($valor == 1){
				return true;
			}
			else
				return false;
		}
		public function MostrarUsu(){
			$Sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Tipo_Usuario = 2");
			$Sql->execute();
			foreach ($Sql as $row) {
				echo "<tr>";
				echo "<td>".$row['Nombre']."</td>";
				echo "<td>".$row['Usuario']."</td>";
				echo "<td>".$row['Apellido_P']."</td>";
				echo "<td>".$row['Apellido_M']."</td>";
				echo "<td>".$row['Edad']."</td>";
				echo "<td>".$row['Correo']."</td>";
				echo "<td>".$row['Telefono']."</td>";
				echo "</tr>";
			}
		}
		public function MostrarUsuAdmin(){
			$Sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Tipo_Usuario = 1");
			$Sql->execute();
			foreach ($Sql as $row) {
				echo "<tr>";
				echo "<td>".$row['Nombre']."</td>";
				echo "<td>".$row['Usuario']."</td>";
				echo "<td>".$row['Apellido_P']."</td>";
				echo "<td>".$row['Apellido_M']."</td>";
				echo "<td>".$row['Edad']."</td>";
				echo "<td>".$row['Correo']."</td>";
				echo "<td>".$row['Telefono']."</td>";
				echo "</tr>";
			}
		}
		public function MostrarUsuAdminName(){
			$Sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Tipo_Usuario = 1");
			$Sql->execute();
			foreach ($Sql as $row) {
				echo "<option value='".$row['Usuario']."'>".$row['Usuario']."</option>";
			}
		}
		public function MostrarUsuName(){
			$Sql = $this->conexionPDO()->prepare("SELECT * FROM usuarios WHERE Tipo_Usuario = 2");
			$Sql->execute();
			foreach ($Sql as $row) {
				echo "<option value='".$row['Usuario']."'>".$row['Usuario']."</option>";
			}
		}
		public function ConsInvetJuegos(){
			$Juegos = $this->conexionPDO()->prepare("SELECT * FROM inventario WHERE Categoria = 'Video_Juegos'");
			$Juegos->execute();
			$varAlma = $Juegos->fetchall();
			return $varAlma;
		}
		public function ConsInvetGadgets(){
			$Gadgets = $this->conexionPDO()->prepare("SELECT * FROM inventario WHERE Categoria = 'Gadgets'");
			$Gadgets->execute();
			$varAlma = $Gadgets->fetchall();
			return $varAlma;
		}
		public function MostrarUsuActu(){
			$query = $this->conexionPDO()->prepare("SELECT * FROM usuarios");
			$query->execute();
			foreach ($query as $row) {
				echo "<tr>";
				echo "<td><input type='text' name='Nom[".$row['Id_usuario']."]' class='form-control' value='".$row['Nombre']."'></td>";
				echo "<td><input type='text' name='Usu[".$row['Id_usuario']."]' class='form-control' value='".$row['Usuario']."'></td>";
				echo "<td><input type='text' name='Ap[".$row['Id_usuario']."]' class='form-control' value='".$row['Apellido_P']."'></td>";
				echo "<td><input type='text' name='Am[".$row['Id_usuario']."]' class='form-control' value='".$row['Apellido_M']."'></td>";
				echo "<td><input type='number' name='Edad[".$row['Id_usuario']."]' class='form-control' value='".$row['Edad']."'></td>";
				echo "<td><input type='text' name='Cor[".$row['Id_usuario']."]' class='form-control' value='".$row['Correo']."'></td>";
				echo "<td><input type='number' name='Tel[".$row['Id_usuario']."]' class='form-control' value='".$row['Telefono']."'></td>";
				echo "<td><input type='number' name='Tip[".$row['Id_usuario']."]' class='form-control' value='".$row['Tipo_Usuario']."'></td>";
				echo "<td><input type='hidden' name='idusu[".$row['Id_usuario']."]' class='form-control' value='".$row['Id_usuario']."'></td>";
				echo "</tr>";
			}
		}
		public function RegisEva($Usu, $Nom, $Sec, $Preg, $Observ, $Resp, $Pos){
			$sql = $this->conexionPDO()->prepare("INSERT INTO evaluacion(Usuario, Nombre, Objeto, Pregunta, Observaciones, Respuestas, R_Eva) VALUES (:usu,:nom,:sec,:preg,:obs,:resp, :pos)");
			if($sql->execute(['usu'=>$Usu, 'nom'=>$Nom, 'sec'=>$Sec, 'preg'=>$Preg, 'obs'=>$Observ, 'resp'=>$Resp, 'pos'=>$Pos]))
				return true;
			else
				return false;
		}
		public function Selectresul0(){
			$sql = $this->conexionPDO()->prepare("SELECT COUNT(*) R_Eva FROM Evaluacion WHERE R_Eva= 0");
			$sql->execute();
			$resul = $sql->fetchall();
			foreach ($resul as $row) {
				echo "['Nunca', ".$row['R_Eva']."]";
			}
		}
		public function Selectresul1(){
			$sql = $this->conexionPDO()->prepare("SELECT COUNT(*) R_Eva FROM Evaluacion WHERE R_Eva= 1");
			$sql->execute();
			$resul = $sql->fetchall();
			foreach ($resul as $row) {
				echo "['Casi Nunca', ".$row['R_Eva']."]";
			}
		}
		public function Selectresul2(){
			$sql = $this->conexionPDO()->prepare("SELECT COUNT(*) R_Eva FROM Evaluacion WHERE R_Eva= 2");
			$sql->execute();
			$resul = $sql->fetchall();
			foreach ($resul as $row) {
				echo "['A veces', ".$row['R_Eva']."]";
			}
		}
		public function Selectresul3(){
			$sql = $this->conexionPDO()->prepare("SELECT COUNT(*) R_Eva FROM Evaluacion WHERE R_Eva= 3");
			$sql->execute();
			$resul = $sql->fetchall();
			foreach ($resul as $row) {
				echo "['Casi Siempre', ".$row['R_Eva']."]";
			}
		}
		public function Selectresul4(){
			$sql = $this->conexionPDO()->prepare("SELECT COUNT(*) R_Eva FROM Evaluacion WHERE R_Eva= 4");
			$sql->execute();
			$resul = $sql->fetchall();
			foreach ($resul as $row) {
				echo "['Siempre', ".$row['R_Eva']."]";
			}
		}
	}

 ?>