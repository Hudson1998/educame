$(document).ready(function(){
	$('form img').on('click',function(){
		$('.menu-popup').css({
			"position":"relative",
			"display":"none",
			"z-index":"-10"
		})
		valueIdTable()
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
			valueIdTable()
		}
	});
	$('#btnAdd').on('click',function(){
		$('.menu-popup').css({
			"position":"fixed",
			"display":"block",
			"z-index":"10"
		})
		valueIdTable()
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
	var descricao = document.getElementById("tDescricao").value;
	var texto = document.getElementById("tTexto").value;
	console.log(descricao)
	console.log(texto)
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
		metodo:'pegaLista',
		id:"",
		materia:"",
		modulo:""
	},
	success:function(data){
		//console.log(data)
		var teste = JSON.parse(data)
		$(document).ready(function(){
			$('.tabelaGuia').children().remove();
			for (var i = 0; i < teste.length; i++) {
				//console.log(teste)
				$('.tabelaGuia').append("<tr><td></td><td class='tabId'>"+teste[i].id+"</td><td class='tabMateria'>"+teste[i].materia+"</td><td class='tabModulo'>"+teste[i].modulo+"</td><td><i class='material-icons btnTableMat'>mode_edit</i><i class='material-icons btnTableMat'>delete</i></td></tr>");
				$('#sMateria').append("<option value='"+teste[i].materia+"'>"+teste[i].materia+"</option>")
				$('#tAno').append("<option value='"+teste[i].modulo+"'>"+teste[i].modulo+"</option>")
			}
			botaoTabelaSumario()
			valueId()
			valueIdTable()
		})

	}
})
function botaoTabelaSumario(){
	$('.btnTableMat').click(function(){
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
						//console.log(data)
					}
				})
				$('.tabelaGuia').append((()=>{
					return "<tr><td></td><td class='tabId'>"+id+"</td><td class='tabMateria'>"+materia+"</td><td class='tabModulo'>"+modulo+"</td><td><i class='material-icons btnTableMat'>mode_edit</i><i class='material-icons btnTableMat'>delete</i></td></tr>"
				})())
			})();
			valueId()
			valueIdTable()
			break;
			case 'delete':
			$(this).parents('tr').remove();
			var valor = $(this).parents('tr').find('td.tabId').text();
			//console.log(valor)  
			$.ajax({
				url:'optionMateria.php',
				type:'POST',
				data:{
					metodo:metodo,
					id:valor,
					materia:materia,
					modulo:modulo
				},
				success:function(data){
					//console.log(data)
				}
			})
			valueId()
			valueIdTable()
			break;
			case 'mode_edit':
			//console.log('teste 3')
			var objMateria = $(this).parents('tr').find('td.tabMateria')
			var objModulo = $(this).parents('tr').find('td.tabModulo')
			var id = $(this).parents('tr').find('td.tabId').text()
			var materia = $(this).parents('tr').find('td.tabMateria').text()
			var modulo = $(this).parents('tr').find('td.tabModulo').text()
			$('input.t1').val(id)
			$('input.t2').val(materia)
			$('input.t3').val(modulo)
			var obj1 = {
				'id':$('input.t1').val(),
				'materia':$('input.t2').val(),
				'modulo':$('input.t3').val(),
			}
			$('button#btnAddMat').text('Editar')
			$('button#btnAddMat').attr('class','btn btn-success btnEditMat')
			$('.btnEditMat').click(function(){
				var obj2 = {
					'id':$('input.t1').val(),
					'materia':$('input.t2').val(),
					'modulo':$('input.t3').val(),
				}
				//console.log(obj1)
				//console.log(obj2)
				var listaSuma1 = Object.entries(obj1);
				var listaSuma2 = Object.entries(obj2);
				//console.log(listaSuma1)
				//console.log(listaSuma2)
				for (var i = 0; i < listaSuma1.length; i++) {
					var num1 = listaSuma1[i][1]
					var num2 = listaSuma2[i][1]
					if (num1 != num2) {
						var cabecalho = listaSuma2[i][0]
						var atual = num2
						//console.log('Conteudo diferente...')
						//console.log(cabecalho+":"+atual)
						$.ajax({
							url:'optionMateria.php',
							type:'POST',
							data:{
								metodo:metodo,
								id:id,
								chave:cabecalho,
								valor:atual
							},
							success:function(data){
								console.log(data)
							}
						})
						console.log('Atualizar tabela')
						if(cabecalho == "materia"){											
							objMateria.text(atual)
						}else if (cabecalho == "modulo") {							
							objModulo.text(atual)			
						}
					}                   
				}
				$('button#btnAddMat').text('Adicionar')
			    $('button#btnAddMat').attr('class','btn btn-success btnTableMat')
			   valueId()
			   valueIdTable()
			})	
			break;
			default:
			console.log('deu errado')
			break;
		}
	})
}
botaoTabelaSumario()
function valueId(){
	var obj = $('.tabelaGuia').children();
	var num = obj.length + 1;
	$('.t1').val(num);
}
function valueIdTable(){
	var obj = $('#tableMatEstudos').children();
	var num = obj.length ;
	$('#tId').val(num);
}
valueId()
function editaSumario(){
	(()=>{
		$('.tabelaGuia tr').click(function(){
			var id = $(this).children('tabId').val();
			var materia = $(this).children('tabMateria').val();
			var modulo = $(this).children('tabModulo').val();
			var tabela = [{
				"id":id,
				"materia":materia,
				"modulo":modulo
			}];
			console.log(tabela)
		})
	})()
	// var metodo = "";
	// switch (metodo) {
	// 	case label_1:
	// 		// statements_1
	// 		break;
	// 	default:
	// 		// statements_def
	// 		break;
	// }
}
editaSumario();