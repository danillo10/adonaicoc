<?php
$servidor = "mysql04-farm86.kinghost.net";
$usuario = "infosyssistema01";
$senha = "1nF05y5";
$db = "infosyssistema01";

$email = "danillo_10_@hotmail.com";

$conn = new mysqli($servidor, $usuario, $senha, $db);

if($conn->connect_error){
    die("Erro de conexão: " . $conn->connect_error);
} 

$sql = "SELECT email FROM newsletter";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "E-mail: " . $row["email"];
        if($row["email"] == $email){
        	echo json_encode("E-mail já cadastrado.");
        }else{
        	$insert = "INSERT INTO (email) VALUES $email";
        	$resultado = $conn->query($insert);
        	echo json_encode('Parabéns você receberá nossa newsletter.');
        }
    }
}else{
    echo "0 resultados";
}

$conn->close();
?>



