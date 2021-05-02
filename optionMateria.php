<?php
include('insertTableMaterial.php');
$metodo = $_POST['metodo'];
if ($metodo == "pegaLista") {
	
}else{
	$id = $_POST['id'];
	$materia = $_POST['materia'];
	$modulo = $_POST['modulo'];
}
$tSuma = new MaterialContent;

switch ($metodo) {
	case 'Adicionar':
	echo "Acessado pagina php. Iniciando conexao com db...";
	echo $tSuma->addCont($id,$materia,$modulo);
	break;
	case 'delete':
	    //echo $tSuma->removeCont($id);
	break;
	case 'mode_edit':
	    //echo $tSuma->alterTable($id,$materia,$metodo);
	break;
	case 'pegaLista':
	echo $tSuma->mostraLista();
	break;
	default:
		# code...
	break;
}
?>