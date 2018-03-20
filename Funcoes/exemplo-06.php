<?php

	$pessoa = array(
		'nome'=> 'Hudson',
		'idade'=>20
	);

	foreach ($pessoa as &$value) {
		# code...
		if(gettype($value) === 'integer') $value +=10;
		echo $value.'<br>';
	}

	print_r($pessoa);

?>