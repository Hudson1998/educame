<!doctype html>
<html lang="pt-br">
<head>
	<meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<link rel="stylesheet" href="css/estilo.css">
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
	   	<label id="materia" class="nomeText" for="materia">Materia</label>
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
    <ul class="nav-rigth nav-tabela">
     <li  class="homeTable" title="home">
      <a class="topHeader tabela-home-icon" href="inicio.php">
       Home
     </a>
   </li>
<li title="Configuração">
  <a class="setting topHeader" href="#">
    Sobre
 </a>
 <ul class="config">
   <li class="materiaSelect"><a id="tema" href="#">Tema Escuro: <span id="toggle" class="material-icons-outlined">
    toggle_off
  </span></a></li>
</ul>
</li>
</ul>
<!-- icone de menu antes da logo que aparece na funcao de responsivo -->
<span id="menu" class="material-icons-outlined menu">
 menu
</span>
<a class="logoTipo" href="#">
	<span class="logoE">E</span> 
	<span class="nomePrinci">Educa+</span>
</a>
</nav>
<div class="submenu">
  <?php

//   include('db_contaus.php');
//   $x = new db_contaus;
//   $lista = $x->listaAno("matematica");
//   echo "<ul class='listaPrincipal'>";
//   for ($i=0; $i < count($lista); $i++) { 
//    echo "<li><a class='itemPrinci' href='#'>".$lista[$i]."<i class='fa fa-chevron-down'></i></a>";
//    $listaC = $x->listaConteudo($lista[$i],"matematica");
//    echo "<ul class='itemSecun'>";
//    for ($c=0; $c < count($listaC); $c++) { 
//     echo "<li><a href='#' onclick='buscaContMateria()' class='sub-item'>".$listaC[$c]."</a></li>";
//   }
//   echo "</li></ul>";
// }
// echo "</ul>";

  ?>
</div>
	<section style="float: right;display: inline">
		<!-- tabela de sumario -->
		<h4>Tabela de informações do sistema</h4>
		<button id="btnAdd" type="button" class="btn btn-primary">Adicionar</button>
	<table class="table table-hover table-dark tabelaSistema">
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
		<tbody id='tableMatEstudos'>
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
	<h4>Tabela Sumário</h4>
	<button id="btnAddMat" type="button" class="btn btn-success btnTableMat">Adicionar</button>
	<table class="table table-hover table-dark">
        <thead>
           	<input class="cxTabela t1" type="number" placeholder="id">
           	<input class="cxTabela t2" type="text" placeholder="materia">
           	<input class="cxTabela t3" type="text" placeholder="modulo">
			<tr>
				<th scope="col"></th>		
				<th scope="col">Id</th>				
				<th scope="col">Matéria</th>				
				<th scope="col">Módulo</th>
				<th scope="col" width="100px"></th>
			</tr>
		</thead>
        <tbody class="tabelaGuia">
              <tr>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td>
              		<i class='material-icons btnTableMat'>mode_edit</i>
		            <i class='material-icons btnTableMat'>delete</i>
              	</td>             
              </tr>
              <tr>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>              	
              </tr>
              <tr>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              </tr>
            </tbody>
        </table>
	</section>
	<script>
	</script>
<footer class="footer">
    <div class="copyFooter">
    <span class="material-icons-outlined copyIcon">
      copyright
    </span>
    2021 by educamais.com.br
  </div>
  <div class="listasFooter">
    <ul class="listaPrinciF">
      <li class="tituloF"><span><span class="logoE" style="color: #8C47DA">E</span>Educa+</span>
        <hr>
        <ul>
          <li>Privacidade</li>
          <li>Termos de serviços</li>
          <li>Objetivo do site</li>
          <li>Dados enviados</li>
          <li>Criptografia</li>
        </ul>
      </li>
      <li class="tituloF"><span>Desenvolvimento</span>
        <hr>
        <ul>
          <li>Design</li>
          <li>Planejamento</li>
          <li>Front-End</li>
          <li>Tenologias Usadas</li>
          <li>Sugestões</li>
          <li>Segurança</li>
        </ul>
      </li>
      <li class="tituloF"><span>Ajuda</span>
        <hr>
        <ul>
          <li>Fraude</li>
          <li>Dados Roubados</li>
          <li>Propagandas abusivas</li>
          <li>Ofensas online</li>
          <li>Ameaças</li>
        </ul>
      </li>
      <li class="tituloF"><span>Contato</span>
        <hr>
        <ul>
          <li>Email: <a href="#">educa+@gmail.com</a></li>
          <li>Tel: <a href="#">(31)98316-0515</a></li>
          <li>Cep: <a href="#">32341-420</a></li>
        </ul>
      </li>
    </ul>
  </div>
</footer>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	<script>	
	</script>
</body>
</html>