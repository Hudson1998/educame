<!doctype html>
<html lang="pt-br">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- -------------Css Style ---------------------------------->
  <link rel="stylesheet" href="css/estilo.css">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
  rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
  <!-- font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

  <!-- font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;0,800;1,900&display=swap" rel="stylesheet">
  
  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- JavaScript -->
  <script src="js/script2.js"></script>
  <title>Education</title>
</head>
<body>
  <!-- navegação superior do site -->
  <nav id="navegacao">
    <ul class="nav-rigth">
      <li>
        <span class="material-icons-outlined">
          home
        </span>
      </li>
      <li class="ensinoMedio">
        <span class="material-icons-outlined">
          library_books
        </span>
        <span class="material-icons-outlined seta">
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
         <li class="materiaSelect"><a><hr></a></li>
         <li class="materiaSelect"><a class="itemProva" href="#">Provas Enem</a></li>
         <li class="materiaSelect"><a class="itemProva" href="#">Provas USP</a></li>
         <li class="materiaSelect"><a class="itemProva" href="#">Provas Vestibular</a></li>
         <li class="materiaSelect"><a class="itemProva" href="#">Provas UFMG</a></li>
       </ul>
     </li>
     <li>
      <span class="material-icons-outlined">
        library_books
      </span>
      <span class="material-icons-outlined seta">
        arrow_drop_down
      </span>
    </li>
    <li>
     <span class="material-icons-outlined">
      notifications
    </span>
  </li>
  <li>
   <span class="material-icons-outlined">
    settings
  </span>
</li>
</ul>
<!-- icone de menu antes da logo que aparece na funcao de responsivo -->
<span class="material-icons-outlined menu">
  menu
</span>
<a class="logoTipo" href="#"><span class="logoE">E</span> <span class="nomePrinci">Education</span></a>
<div class="nav-rigth">
</div>
</nav>
<!-- Navegação lateral do site -->
<div class="submenu">
  <!-- <div class="perfil" style="
  background-image: url(midia/fundo.jpg);
  background-repeat: no-repeat;
  background-size: 100% 100%;
  background-origin: border-box;
  ">
  <div class="foto" style="
  background-image:url(midia/satou.jpg);
  background-size: 250px;
  background-repeat: no-repeat;
  background-position: center;
  "></div>
  <span class="nome">Hudson rafael</span>
  <i class="fa fa-caret-down" style="font-size: 40px;"></i>
  <i id="icone" class="fa fa-gear" style="font-size: 25px;"></i>
</div> -->
<?php

include('db_contaus.php');
$x = new db_contaus;
$lista = $x->listaAno("matematica");
echo "<ul class='listaPrincipal'>";
for ($i=0; $i < count($lista); $i++) { 
 echo "<li><a class='itemPrinci' href='#'>".$lista[$i]."<i class='fa fa-chevron-down'></i></a>";
 $listaC = $x->listaConteudo($lista[$i],"matematica");
 echo "<ul class='itemSecun'>";
 for ($c=0; $c < count($listaC); $c++) { 
  echo "<li><a href='#' onclick='buscaContMateria()' class='sub-item'>".$listaC[$c]."</a></li>";
}
echo "</li></ul>";
}
echo "</ul>";

?>
</div>
<script>

</script>
<!-----------------------Criando tabelas-------------------------------------->
<div class=""></div>
<!-----------------------Trabalhando Conteudo --------------------------------->
<section style="float: right;display: inline">
  <h1 class="title">Title</h1>
  <hr>
  <h3>Subtitle</h3>
  <p>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  </p>

</section>
<style>

</style>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
</script>
<!-- -------------------------------------------------------------------------------------------- -->
<script>
  buscaContMateria()
</script>
</body>
</html>