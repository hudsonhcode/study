<?php

	require_once("config.php");

	echo session_save_path();

	echo "<br>";

	var_dump(session_status());

	echo "<br>";

	switch (session_status()) {
		case PHP_SESSION_DISABLED:
			# code...
			echo "As sessões estiveram desabilitadas";
			break;
		
		case PHP_SESSION_NONE:
			# code...
			echo "As sessões estiveram habilitadas, mas nenhuma existir";
			break;

		case PHP_SESSION_ACTIVE:
			echo "As sessões estiveram habilitadas, e uma existir";
			break;
		default:
			# code...
			break;
	}

?>