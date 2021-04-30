<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- -------------Css Style ---------------------------------->
	<link rel="stylesheet" href="css/estilo.css">
	<!-- material icons -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
	rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	<!-- font -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
	<!-- font icons -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- font -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;0,800;1,900&display=swap" rel="stylesheet">

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- JavaScript -->
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/tabela.js"></script>
	<link rel="stylesheet" href="css/tabela.css">
	<title>Education</title>
</head>
<body>
  <div class="menu-popup">
	<form class="popFormulario">
	   <img src="midia/botao-x.png" style="
	   position: absolute;
	   width: 50px;
	   height: 50px;
	   display: flex;
	   right: -20px;
	   top: -20px;
	   " alt="">
	   <label id="id" class="nomeText" for="id">Id
	   	<input id="tId" placeholder="1..." type="number"></label>
	   	<label id="materia" class="nomeText" for="materia">Materia
	   		<select name="materia" id="sMateria">
	   			<option value="" selected></option>
	   			<option value="matematica">matematica</option>
	   			<option value="português">português</option>
	   			<option value="historia">historia</option>
	   			<option value="geografia">geografia</option>
	   			<option value="ciencias">ciências</option>
	   			<option value="biologia">biologia</option>
	   			<option value="quimica">quimica</option>
	   			<option value="filosofia">filosofia</option>
	   			<option value="fisica">física</option>
	   			<option value="artes">artes</option>
	   			<option value="ingles">inglês</option>
	   			<option value="ed.fisica">ed.fisica</option>
	   			<option value="jquery">jquery</option>
	   			<option value="c language">c language</option>
	   			<option value="rede de computadores">rede de computadores</option>
	   		</select>
	   	</label>
	   	<label id="ano" class="nomeText" for="ano">Ano
	   		<select id="tAno" name="ano">
	   			<option value="" selected></option>
	   			<option value="1° ano">1° ano</option>
	   			<option value="2° ano">2° ano</option>
	   			<option value="3° ano">3° ano</option>
	   			<option value="6° ano">6° ano</option>
	   			<option value="7° ano">7° ano</option>
	   			<option value="8° ano">8° ano</option>
	   			<option value="9° ano">9° ano</option>
	   		    <option value="módulo 1">módulo 1</option>
	   			<option value="módulo 2">módulo 2</option>
	   			<option value="módulo 3">módulo 3</option>
	   			<option value="módulo 4">módulo 4</option>
	   			<option value="módulo 5">módulo 5</option>
	   			<option value="módulo 6">módulo 6</option>
	   			<option value="módulo 7">módulo 7</option>
	   			<option value="módulo 8">módulo 8</option>
	   			<option value="módulo 9">módulo 9</option>
	   			<option value="módulo 10">módulo 10</option>
	   			<option value="módulo 11">módulo 11</option>
	   			<option value="módulo 12">módulo 12</option>
	   		</select>
	   	</label>
		    <label id="conteudo" class="nomeText" for="conteudo">conteudo
			<input id="tConteudo" placeholder="Raiz quadrada..." type="texto"></label>
			<label id="titulo" class="nomeText" for="titulo">Titulo
			<input id="tTitulo" placeholder="A historia da raiz..." type="text"></label>
			<label id="descricao" class="areaTxt" for="decricao">Descrição</label>
			<textarea  placeholder="Digite aqui a desrição..." name="descricao" id="tDescricao" cols="30" rows="10"></textarea>
			<label id="texto" class="areaTxt" for="txt">Texto</label>
			<textarea placeholder="Digite aqui seu texto..." name="txt" id="tTexto" cols="30" rows="10"></textarea>
			<button id="btnCancel" type="button" class="btn btn-danger">Limpar</button>
			<button onclick="enviaDados()" type="button" id="botaoAdiciona" class="btn btn-primary">Adicionar</button>
	</form>
  </div>
 <nav id="navegacao">
    <ul class="nav-rigth">
     <li title="home">
      <a href="inicio.php">
       <span class="material-icons-outlined">
         home
       </span>
     </a>
   </li>
   <li title="Tabela">
    <a href="tabela.php">
      <span class="material-icons-outlined">
        dashboard_customize
      </span>
    </a>
  </li>
  <li class="ensinoMedio" title="Ensino Básico">
   <span class="material-icons-outlined">
     library_books
   </span>
   <span class="material-icons-outlined seta-estudos">
     arrow_drop_down
   </span>
   <ul class="ensinoMedio">
    <li class="materiaSelect"><a class="item" href="#">Matematica</a></li>
    <li class="materiaSelect"><a class="item" href="#">Português</a></li>
    <li class="materiaSelect"><a class="item" href="#">Historia</a></li>
    <li class="materiaSelect"><a class="item" href="#">Geografia</a></li>
    <li class="materiaSelect"><a class="item" href="#">Filosofia</a></li>
    <li class="materiaSelect"><a class="item" href="#">Química</a></li>
    <li class="materiaSelect"><a class="item" href="#">Física</a></li>
    <li class="materiaSelect"><a class="item" href="#">Sociologia</a></li>
    <li class="materiaSelect"><a class="item" href="#">Artes</a></li>
    <li class="materiaSelect"><a class="item" href="#">Inglês</a></li>
    <li class="materiaSelect"><a class="item" href="#">Ed.Física</a></li>
    <li class="linha"><a id="linhaHr" ><hr></a></li>
    <li class="materiaSelect"><a class="itemProva" href="#">Provas Enem</a></li>
    <li class="materiaSelect"><a class="itemProva" href="#">Provas USP</a></li>
    <li class="materiaSelect"><a class="itemProva" href="#">Provas Vestibular</a></li>
    <li class="materiaSelect"><a class="itemProva" href="#">Provas UFMG</a></li>
  </ul>
</li>
<li class="cursos" title="cursos">
  <span class="material-icons-outlined">
    library_books
  </span>
  <span class="material-icons-outlined seta-cursos">
    arrow_drop_down
  </span>
  <ul class="cursos">
    <li class="materiaSelect"><a class="item" href="#">PHP Language</a></li>
    <li class="materiaSelect"><a class="item" href="#">rede de computadores</a></li>
    <li class="materiaSelect"><a class="item" href="#">C Language</a></li>
    <li class="materiaSelect"><a class="item" href="#">JavaScript</a></li>
    <li class="materiaSelect"><a class="item" href="#">Jquery</a></li>
    <li class="materiaSelect"><a class="item" href="#">Css</a></li>
    <li class="materiaSelect"><a class="item" href="#">Angular 11</a></li>
    <li class="materiaSelect"><a class="item" href="#">HTML 5</a></li>
    <li class="materiaSelect"><a class="item" href="#">Bootstrap 5</a></li>
    <li class="linha"><a id="linhaHr" ><hr></a></li>
    <li class="materiaSelect"><a class="itemProva" href="#">Provas Enem</a></li>
    <li class="materiaSelect"><a class="itemProva" href="#">Provas USP</a></li>
    <li class="materiaSelect"><a class="itemProva" href="#">Provas Vestibular</a></li>
    <li class="materiaSelect"><a class="itemProva" href="#">Provas UFMG</a></li>
  </ul>
</li>
<li title="Notificação">
  <span class="material-icons-outlined">
    notifications
  </span>
</li>
<li title="Configuração">
  <a class="setting" href="#">
    <span class="material-icons-outlined">
     settings
   </span>
 </a>
 <ul class="config">
   <li class="materiaSelect"><a id="tema" href="#">Tema Escuro: <span id="toggle" class="material-icons-outlined">
    toggle_off
  </span></a></li>
</ul>
</li>
</ul>
<!-- icone de menu antes da logo que aparece na funcao de responsivo -->
<a class="logoTipo" onclick="temaMuda()" href="#"><span class="logoE">E</span> <span class="nomePrinci">Education</span></a>

<input id="search" type="text" placeholder="Matematica...">
<span id="lupa" class="material-icons-outlined">
  search
</span>
</nav>
	<section style="float: right;display: inline">
		<h1 class="title">Tabela de Estudos</h1>
		<hr>
		<h4>Abaixo a tabela de informações do sistema</h4>
		<button id="btnAdd" type="button" class="btn btn-primary">Adicionar</button>
	<table class="table table-hover table-dark">
		<thead>
			<tr>
				<th scope="col"></th>
				<th scope="col">Id</th>
				<th scope="col">Materia</th>
				<th scope="col">Ano</th>
				<th scope="col">Conteudo</th>
				<th scope="col">Titulo</th>
				<th scope="col">Descricao</th>
				<th scope="col">Texto</th>
				<th scope="col" width="100px"></th>
			</tr>
		</thead>
		<tbody>
			<?php 
			include('db_contaus.php');
			$db = new db_contaus;
			$lista = $db->listaEstudo();
			for ($i=0; $i < count($lista); $i++) {
				echo "<tr>";
				echo "<td></td>";
				echo $lista[$i]->montaLista();
				echo "</tr>";
			}
				?>
			</tbody>
		</table>
	</section>
	<footer class="footer">
		<ul>
			<li>item 1</li>
			<li>item 1</li>
			<li>item 1</li>
			<li>item 1</li>
			<li>item 1</li>
		</ul>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script>	
	</script>
</body>
</html>