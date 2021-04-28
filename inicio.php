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
            <a class="nav-link" aria-current="page" href="#">Inicial</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle=    "dropdown" aria-expanded="false">
              Ensino Médio
            </a>
            <ul class="dropdown-menu ensinoMedio" aria-labelledby="navbarDropdown">
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Matematica</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Português</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Historia</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Geografia</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Filosofia</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Química</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Física</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Sociologia</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Artes</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Inglês</a></li>
             <li class="materiaSelect"><a class="dropdown-item item" href="#">Ed.Física</a></li>
             <li class="materiaSelect"><hr class="dropdown-divider"></li>
             <li class="materiaSelect"><a class="dropdown-item itemProva" href="#">Provas Enem</a></li>
             <li class="materiaSelect"><a class="dropdown-item itemProva" href="#">Provas USP</a></li>
             <li class="materiaSelect"><a class="dropdown-item itemProva" href="#">Provas Vestibular</a></li>
             <li class="materiaSelect"><a class="dropdown-item itemProva" href="#">Provas UFMG</a></li>
           </ul>
         </li>
         <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle=    "dropdown" aria-expanded="false">
            Ensino Fundamental
          </a>
          <ul class="dropdown-menu ensinoFundamental" aria-labelledby="navbarDropdown">
            <li class="materiaSelect"><a class="dropdown-item item" href="#">Matematica</a></li>
            <li class="materiaSelect"><a class="dropdown-item item" href="#">português</a></li>
            <li class="materiaSelect"><a class="dropdown-item item" href="#">Historia</a></li>
            <li class="materiaSelect"><a class="dropdown-item item" href="#">Geografia</a></li>
            <li class="materiaSelect"><a class="dropdown-item item" href="#">Ciências</a></li>
            <li class="materiaSelect"><a class="dropdown-item item" href="#">Artes</a></li>
            <li class="materiaSelect"><a class="dropdown-item item" href="#">Inglês</a></li>
            <li class="materiaSelect"><a class="dropdown-item item" href="#">Ed.Física</a></li>
            <li><hr class="dropdown-divider"></li>
            <li class="materiaSelect"><a class="dropdown-item itemProva" href="#">Provas Enem</a></li>
            <li class="materiaSelect"><a class="dropdown-item itemProva" href="#">Provas USP</a></li>
            <li class="materiaSelect"><a class="dropdown-item itemProva" href="#">Provas Vestibular</a></li>
            <li class="materiaSelect"><a class="dropdown-item itemProva" href="#">Provas UFMG</a></li>
          </ul>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="#">Pesquisas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tabela.php">Tabelas</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- -------------------------SideNav do site----------------------------------- -->
<div class="submenu">
  <!--
  <div class="perfil" style="
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

</div>
-->
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
  body{
    background-color: #E4E4E4
  }
  section p{
    font-size: 20px;
  }
  section h1, h2{
    text-transform: capitalize;
  }
    .imgTopo{
      height: 300px;
     position: relative;
     display: inline-block;
     float: right;
     margin: 0px 0px 20px 20px;
   }
   .imgEsquerda{
     position: relative;
     display: inline-block;
     float: left;
     margin: 0px 20px 20px 0px;
   }
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