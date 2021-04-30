<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
	include('insertTableMaterial.php');
	$number = new MaterialContent;
	$id = 1;
	$materia = "matematica";
	$conteudo = "Raiz";
	//echo $number->addCont($id,$materia,$conteudo);
	echo $number->mostraLista();
	 ?>
</body>
</html>