<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	$lista = [
		[
			"nome"=>"hudson",
			"idade"=>22,
			"proficao"=>"eletricista"
	    ],
	    [
			"nome"=>"douglas",
			"idade"=>18,
			"proficao"=>"eletricista"
	    ],
	    [
			"nome"=>"carlos",
			"idade"=>29,
			"proficao"=>"eletricista"
	    ]
	];
	echo json_encode($lista);

	?>
</body>
</html>