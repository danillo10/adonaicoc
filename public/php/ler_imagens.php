<?php
	
	$diretorio = "../img/clientes";

	if(is_dir($diretorio)){
		if($abrir = opendir($diretorio)){
			while(($arquivo = readdir($abrir)) !== false){
				if(!is_dir($arquivo)){
					$utf = utf8_encode($arquivo);
					$arr[] = $utf;
				}
			}
			echo json_encode($arr);
			closedir($abrir);
		}
	}

?>