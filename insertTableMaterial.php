<?php 
class MaterialContent{
	// atributos
	private $materia;
	private $conteudo;

	// funcoes
	function addCont($id,$materia,$conteudo){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "contaus";
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "INSERT INTO sumario (id,materia,conteudo)
		VALUES (".$id.",'".$materia."','".$conteudo."')";
		if ($conn->query($sql) === TRUE) {
			return "<h1>Arquivos adicionados com sucesso!</h1>";
		} else {
			return "<h1>Erro ao adicionar dados!</h1>";
		}
		$conn->close();
	}
	function mostraLista(){
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "contaus";
		$lista = array();
		$num = 0;
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT id,materia,conteudo FROM sumario";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$id = $row["id"];
				$materia = $row["materia"];
				$conteudo = $row["conteudo"];
				array_push($lista, "
					<h2>$id</h2>
					<h2>$materia</h2>
					<h2>$conteudo</h2>
					");
			}
		} else {
			echo "0 results";
		}
		$textoLista = implode("", $lista);
		if($id != 0){
			return $textoLista;
		}else{
			return "<h2>Deu errado</h2>";
		}
		$conn->close();
	}
	// getters e setters
	function get_materia(){
		return $this->materia;
	}
	function set_materia($materia){
		$this->materia = $materia;
	}
	function get_conteudo(){
		return $this->conteudo;
	}
	function set_conteudo($conteudo){
		$this->conteudo = $conteudo;
	}
}