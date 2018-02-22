<?php

$servidor = "mysql04-farm86.kinghost.net";
$usuario = "infosyssistema01";
$senha = "1nF05y5";
$db = "infosyssistema01";

$email = $_POST['email'];

$conn = new mysqli($servidor, $usuario, $senha, $db);

if($conn->connect_error){
	die("Erro de conexão: " . $conn->connect_error);
} 

$sql = "SELECT email FROM newsletter";
$result = $conn->query($sql);

if($result->num_rows > 0){

	while($row = $result->fetch_assoc()){

	}

	if(strstr($row["email"], $email)){
		
	}else{
		$insert = "INSERT INTO newsletter (email) VALUES ('$email')";
		$resultado = $conn->query($insert);
	}
	
}else{
	echo "0 resultados";
}

$conn->close();

?>
