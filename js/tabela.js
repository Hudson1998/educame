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
	var descricao = toString(document.getElementById("tDescricao").value);
	var texto = toString(document.getElementById("tTexto").value);

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
$.ajax({
	url:"optionMateria.php",
	type:"POST",
	data:{
		metodo:"pegaLista"
	},
	success:function(data){
		var teste = JSON.parse(data)
		//console.log(teste.length)
		$(document).ready(function(){
			$('.tabelaGuia').children().remove();
			for (var i = 0; i < teste.length; i++) {
				//console.log(teste)
				$('.tabelaGuia').append("<tr><td></td><td>"+teste[i].id+"</td><td>"+teste[i].materia+"</td><td>"+teste[i].modulo+"</td><td><i class='material-icons btnTableMat'>mode_edit</i><i class='material-icons btnTableMat'>delete</i></td></tr>");	
			}
			botaoTabelaSumario()
		})

	}
})
function botaoTabelaSumario(){
	$('.btnTableMat').click(function(){
		console.log("Inciando")
		var id = $('.t1').val()
		var materia = $('.t2').val();
		var modulo = $('.t3').val();
		var metodo = $(this).text()												
		switch (metodo) {
			case 'Adicionar':
				(()=>{
					$.ajax({
						url:'optionMateria.php',
						type:'POST',
						data:{
							metodo:metodo,
							id:id,
							materia:materia,
							modulo:modulo
						},
						success:function(data){
							console.log(data)
						}
					})
			    })();
				break;
			case 'delete':
			    $(this).parents('tr').remove();
			    break;
			case 'mode_edit':
			    console.log('teste 3')
			    break;
			default:
				console.log('deu errado')
				break;
		}
		console.log('testando')
	})
}
botaoTabelaSumario()
