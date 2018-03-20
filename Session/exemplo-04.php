<?php

	session_id('7dnlefj5pg0a4q1u1u2h6apudf');

	require_once("config.php");

	session_regenerate_id();

	echo session_id();

	var_dump($_SESSION);



?>