$(document).ready(function(){
	$('form img').on('click',function(){
		$('.menu-popup').css({
			"position":"relative",
			"display":"none",
			"z-index":"-10"
		})
	})
});
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
				}
				mudaTema()
			}
		})
	})
})
  function buscaContMateria(){
  $(document).ready(function(){
    $('.sub-item').click(function(){
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
      $('.ensinoMedio').click(function(){
        var resposta = $('#navegacao ul ul').css('display');
        //console.log(resposta)
        if (resposta != "block") {
          $('#navegacao ul ul').css('display','block')
        }else{
          $('#navegacao ul ul').css('display','none')
        }
      })
    })
  }
  abreMenu()
     function mudaTema(){
      $(document).ready(function(){
        $('body').css('background','#202124')
        $('section').css('color','rgba(255,255,255,0.6)')
        $('.submenu').css('background','#2e2e2e')
        $('.submenu ul li a').css('color','rgba(255,255,255,.6)')
        $('.submenu ul ul').css('background','#1e1e1e')
      })
    }
    mudaTema()