<?php 
include('db_contaus.php');
$db = new db_contaus;
$lista = $db->listaEstudo();
for ($i=0; $i < count($lista); $i++) { 
	echo $lista[$i]->mostratexto();
}

 ?>