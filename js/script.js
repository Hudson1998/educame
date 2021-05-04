$(document).ready(function(){
	$('form img').on('click',function(){
		$('.menu-popup').css({
			"position":"relative",
			"display":"none",
			"z-index":"-10"
		})
	})
	temaInicial()
})
function eventSubMenu(){
		$('section,.submenu').click(function(){
			fechaSubmenu()
		})	
	}
temaInicial()
function listaEfeito(){
	$(document).ready(function(){
		$(".itemPrinci").on('click',function(){
			mudaTema()
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
	});
}
listaEfeito()
$(document).ready(function(){
	$('.item').click(function(){		
		var nome = $(this).text()
		$.ajax({
			url:'sumario.php',
			type:'POST',
			data:{
				materia:nome
			},
			success:function(data){
				//console.log(data)
				if (data == "0deu erro") {
					alert("Sem dados no banco de dados!")
				}else{
					$('.listaPrincipal').remove();
					$('.submenu').append(data);
					listaEfeito()
					buscaContMateria()
					temaSelect()
				}
			}
		})
	})
})
function buscaContMateria(){
	$(document).ready(function(){
		$('.sub-item').click(function(){
			mudaTema()
			temaSelect()
			var conteudo = $(this).text()
			console.log(conteudo)
			$.ajax({
				url:"conteudoBusca.php",
				type: "POST",
				data:{
					conteudo: conteudo
				},
				success: function(response) {
					console.log(response)
					$('section').children().remove();
					$('section').append(response);
					mudaTema()
				}
			})
		})
	})
}
function abreMenu(){
	$(document).ready(function(){
		$('li.ensinoMedio').click(function(){
			mudaTema()
			var resposta = $(this).children('ul.ensinoMedio').css('display');
			//console.log(resposta)
			if (resposta != "block") {
				$('ul.ensinoMedio').css('display','block')
				$('ul.config').css('display','none')
				$('ul.cursos').css('display','none')
			}else{
				$('ul.ensinoMedio').css('display','none')
				eventSubMenu()
			}
		})
		$('.setting').click(function(){
			var resposta = $('.config').css('display');
			//console.log(resposta)
			if (resposta != "block") {
				$('ul.config').css('display','block')
				$('ul.ensinoMedio').css('display','none')
				$('ul.cursos').css('display','none')
			}else{
				$('ul.config').css('display','none')
				eventSubMenu()
			}
		})
		$('li.cursos').click(function(){
			mudaTema()
			var resposta = $(this).children('ul.cursos').css('display');
			//console.log(resposta)
			if (resposta != "block") {
				$('ul.cursos').css('display','block')
				$('ul.config').css('display','none')
				$('ul.ensinoMedio').css('display','none')
			}else{
				$('ul.cursos').css('display','none')
				eventSubMenu()
			}
		})
	})
}
function fechaSubmenu(){
	$('ul.cursos').css('display','none')
	$('ul.config').css('display','none')
	$('ul.ensinoMedio').css('display','none')

}
abreMenu()
function mudaTema(){
	$(document).ready(function(){
		$('#tema').click(function(){
			console.log('deu certo, foi clicado')
			var togg = $("#toggle").text();
			if (togg != 'toggle_off') {
				$('body').css('background','#e4e4e4')
				$('section').css('color','#000')
				$('.submenu').css('background','#EBEBEB')
				$('.submenu ul li a').css('color','#1B1B1B')
				$('.submenu ul ul').css('background','#D3D3D3')
				$('#tema #toggle').text('toggle_off')
			}else{
				$('body').css('background','#202124')
				$('section').css('color','rgba(255,255,255,0.6)')
				$('.submenu').css('background','#2e2e2e')
				$('.submenu ul li a').css('color','rgba(255,255,255,.6)')
				$('.submenu ul ul').css('background','#1e1e1e')
				$('#tema #toggle').text('toggle_on')
			}
		})
	})
}
function temaSelect(){
	var togg = $("#toggle").text();
	if (togg == 'toggle_on') {
		$('body').css('background','#202124')
		$('section').css('color','rgba(255,255,255,0.6)')
		$('.submenu').css('background','#2e2e2e')
		$('.submenu ul li a').css('color','rgba(255,255,255,.6)')
		$('.submenu ul ul').css('background','#1e1e1e')
	}else{
		$('body').css('background','#e4e4e4')
		$('section').css('color','#000')
		$('.submenu').css('background','#EBEBEB')
		$('.submenu ul li a').css('color','#1B1B1B')
		$('.submenu ul ul').css('background','#D3D3D3')
	}
}
mudaTema()
function temaInicial(){
	$('body').css('background','#202124')
	$('section').css('color','rgba(255,255,255,0.6)')
	$('.submenu').css('background','#2e2e2e')
	$('.submenu ul li a').css('color','rgba(255,255,255,.6)')
	$('.submenu ul ul').css('background','#1e1e1e')
	$('#tema #toggle').text('toggle_on')
}
$.ajax({
	url:'optionMateria.php',
	type:'POST',
	data:{
		id:"",
		materia:"",
		modulo:"",
		metodo:"pegaLista"
	},
	success:function(data){
		var lista = JSON.parse(data)
		console.log(lista[0].materia)
		for (var i = 0; i < lista.length; i++) {
			$('ul.cursos').append("<li class='materiaSelect'><a class='item' href='#'>"+lista[i].materia+"</a></li>")
		}
	}   
})