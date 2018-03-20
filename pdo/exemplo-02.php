<?php 

	$user = "sa";
	$pass = "123";

	try{
		
		$conn = new PDO("sqlsrv:DataBase=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "");
		$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
		$stmt->execute();
		$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

		echo json_encode($results);

	}catch(PDOException $e){
		echo "conexão failed ! ". $e->getMessage();
	}
	






?>