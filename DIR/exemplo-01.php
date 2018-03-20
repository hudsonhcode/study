<?php

	
	$name = "images";

	if(!is_dir($name)){

		mkdir($name); //cria o diretório
		echo "Diretório $name criado com sucesso !";
	}else{
		//rmdir($name);//remove o diretório
		echo "Já existe o diretório !!";
	}




?>