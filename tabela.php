<!doctype html>
<html lang="pt-br">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- -------------Css Style ---------------------------------->
	<link rel="stylesheet" href="css/style.css">

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
	<script src="js/script.js"></script>
	<script type="text/javascript" src="js/tabela.js"></script>
	<link rel="stylesheet" href="css/tabela2.css">

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
				<!-- -----------------------------Desenvolvimento Nav--------------------------------------------- -->
				<nav id="navegacao" class="navbar navbar-expand-lg navbar-dark bg-dark">
					<div class="container-fluid">
						<a class="navbar-brand" href="#"><span class="logoE">E</span> <span class="nomePrinci">Education</span></a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarColor01">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navDireita">
								<li class="nav-item">
									<a class="nav-link" aria-current="page" href="inicio.php">Inicial</a>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle=    "dropdown" aria-expanded="false">
										Ensino Médio
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li class="materiaSelect"><a class="dropdown-item" href="#">Matematica</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Português</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Historia</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Geografia</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Filosofia</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Química</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Física</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Sociologia</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Artes</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Inglês</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Ed.Física</a></li>
										<li class="materiaSelect"><hr class="dropdown-divider"></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Provas Enem</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Provas USP</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Provas Vestibular</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Provas UFMG</a></li>
									</ul>
								</li>
								<li class="nav-item dropdown">
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle=    "dropdown" aria-expanded="false">
										Ensino Fundamental
									</a>
									<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
										<li class="materiaSelect"><a class="dropdown-item" href="#">Matematica</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Português</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Historia</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Geografia</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Ciências</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Artes</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Inglês</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Ed.Física</a></li>
										<li><hr class="dropdown-divider"></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Provas Enem</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Provas USP</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Provas Vestibular</a></li>
										<li class="materiaSelect"><a class="dropdown-item" href="#">Provas UFMG</a></li>
									</ul>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Pesquisas</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#">Tabelas</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<!-----------------------Trabalhando Conteudo --------------------------------->
				<section style="float: right;display: inline">
					<h1 class="title">Tabela de Estudos</h1>
					<hr>
					<h4>Abaixo a tabela de informações do sistema</h4>
					<button id="btnAdd" type="button" class="btn btn-primary">Adicionar</button>
					<style>f
				</style>
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
				<script>
						/*
						
						*/
					</script>
				</section>
				<!-- ---------------------------Trabalahndo no rodape do site------------------------------------ -->
				<footer class="footer">
					<ul>
						<li>item 1</li>
						<li>item 1</li>
						<li>item 1</li>
						<li>item 1</li>
						<li>item 1</li>
					</ul>
				</footer>
				<!-- ---------------------Script no fim do site para inclusao do bootstrap---------------------- -->
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
				<!-- -------------------------------------------------------------------------------------------- -->
				<script>
					$(document).ready(function(){
						$('form img').on('click',function(){
							$('.menu-popup').css({
								"position":"relative",
								"display":"none",
								"z-index":"-10"
							})
						})
						$(".itemPrinci").on('click',function(){
							if ($(this).next().css('visibility') == "hidden") {
								$(this).next().css({
									"height": "auto",
									"max-height": "1500px",
									"visibility": "visible",
									"position": "relative",
									"transition":"all .3s"
								})
								$(this).find('i').css('transform','translateY(-50%) rotate(-180deg)');
							}else{
								$(this).next().css({
									"max-height": "0",
									"position": "relative",
									"visibility": "hidden",
									"overflow": "hidden",
									"transition":"all .1s"

								});
								$(this).find('i').css('transform','translateY(-50%)');
							}
						});
						$('#btnAdd').on('click',function(){
							$('.menu-popup').css({
								"position":"fixed",
								"display":"block",
								"z-index":"10"
							})
						})
					});
                    //Trabalhando o Edit

                    function encerraMenupop(){
                    	$('.menu-popup').css({
                    		"position":"relative",
                    		"display":"none",
                    		"z-index":"-10"
                    	})
                    	$('#tId').val("");
                    	$('#sMateria').val("")
                    	$('#tAno').val("")
                    	$('#tConteudo').val("")
                    	$('#tTitulo').val("")
                    	$('#tDescricao').val("")
                    	$('#tTexto').val("")
                    }
                    function updateDb(id,chave,valor){
                    	$.ajax({
                    		url:"updateSql.php",
                    		method:"POST",
                    		data:{
                    			id:id,
                    			chave: chave,
                    			valor: valor
                    		},
                    		success:function(response){
                    			console.log(response)
                    		}
                    	})
                    }
                    var objeto1 = ""
                    var objeto2 = ""
                    function comparandoDados(){
                    	$(document).ready(function(){
                    		var idEstudos =$('#tId').val();
                    		var id = $('#tId').val()
                    		var materia = $('#sMateria').val()
                    		var ano = $('#tAno').val()
                    		var conteudo = $('#tConteudo').val()
                    		var titulo = $('#tTitulo').val()
                    		var descricao = $('#tDescricao').val()
                    		var texto = $('#tTexto').val()
                    		objeto2 = {
                    			"id":id,
                    			"materia":materia,
                    			"ano":ano,
                    			"conteudo":conteudo,
                    			"titulo":titulo,
                    			"descricao":descricao,
                    			"texto":texto
                    		}
                    		var lista1 = Object.entries(objeto1);
                    		var lista2 = Object.entries(objeto2);
                    		function teste(list1,list2){
                    			for (var i = 0; i < list1.length; i++) {
                    				var num1 = list1[i][1]
                    				var num2 = list2[i][1]
                    				if (num1 != num2) {
						                   //console.log(num1+" é diferente de: "+num2)
						                   var cabecalho = list2[i][0]
						                   var atual = num2
						                   console.log('Conteudo diferente...')
						                   console.log(cabecalho+":"+atual)
						                   updateDb(idEstudos,cabecalho, atual)
						               }                   
						           }
						       }
						       teste(lista1,lista2)
						       encerraMenupop()
						   })
                    }
                    function editarDados(){

                    	$(document).ready(function(){
                    		$('.edit').click(function(){
                    			var id = $(this).parent().siblings('.tdId').text()
                    			var materia = $(this).parent().siblings('.tdMateria').text()
                    			var ano = $(this).parent().siblings('.tdAno').text()
                    			var conteudo = $(this).parent().siblings('.tdConteudo').text()
                    			var titulo = $(this).parent().siblings('.tdTitulo').text()
                    			var descricao = ""
                    			var texto = ""
                    			var lista = ""
                    			$.ajax({
                    				url:'buscaDescText.php',
                    				type:'POST',
                    				data:{id:id},
                    				success:function(response){
                    					lista = JSON.parse(response)
                    					descricao = lista.descricao;
                    					texto = lista.texto;
                    					$('#tId').val(id);
                    					$('#sMateria').val(materia)
                    					$('#tAno').val(ano)
                    					$('#tConteudo').val(conteudo)
                    					$('#tTitulo').val(titulo)
                    					$('#tDescricao').val(descricao)
                    					$('#tTexto').val(texto)
                    					objeto1 = {
                    						"id":id,
                    						"materia":materia,
                    						"ano":ano,
                    						"conteudo":conteudo,
                    						"titulo":titulo,
                    						"descricao":descricao,
                    						"texto":texto
                    					}
                    					//console.log(objeto1)
                    				}
                    			})

                    			$('.menu-popup').css({
                    				"position":"fixed",
                    				"display":"block",
                    				"z-index":"10"
                    			})
                    			$("#botaoAdiciona").attr({
                    				'onclick':'comparandoDados()'
                    			})
                    			$('#botaoAdiciona').text('Salvar')

                    		})
                    	})
                    }

                    function excluiDados(){
                    	$(document).ready(function(){
                    		$('.delete').click(function(){
                    			var id = $(this).parent().siblings('.tdId').text()
                    			console.log(id)
                    			$.ajax({
                    				url:"deleteRow.php",
                    				type: "POST",
                    				data:{
                    					id: id
                    				}
                    			})
                    			$(this).parents('tr').remove();
                    		})
                    	})
                    }
                    excluiDados()
                    function enviaDados(){
                    	var id = document.getElementById("tId").value;
                    	var materia = document.getElementById("sMateria").value;
                    	var ano = document.getElementById("tAno").value;
                    	var conteudo = document.getElementById("tConteudo").value;
                    	var titulo = document.getElementById("tTitulo").value;
                    	var descricao = document.getElementById("tDescricao").value;
                    	var texto = document.getElementById("tTexto").value;

                    	$.ajax({
                    		url:"insertTabela.php",
                    		type: "POST",
                    		data:{
                    			id: id,
                    			materia:materia,
                    			ano: ano,
                    			conteudo:conteudo,
                    			titulo: titulo,
                    			descricao:descricao,
                    			texto: texto
                    		}
                    	})
                    	console.log("dados enviados..."+ano)
                    	var adicionaTexto = ""
                    	$('tbody').append("<tr><td></td><td class='tdId'>"+id+"</td><td class='tdMateria'>"+materia+"</td><td class='tdAno'>"+ano+"</td><td class='tdConteudo'>"+conteudo+"</td><td class='tdTitulo'>"+titulo+"</td><td class='tdDescricao'>click</td><td class='tdTexto'>click</td><td><i class='material-icons'>mode_edit</i> <i class='material-icons delete'>delete</i></td></tr>")
                    	excluiDados()
                    	editarDados()
                    }
                    editarDados()
                </script>
            </body>
            </html>