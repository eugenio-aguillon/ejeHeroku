<?php session_start();?>
<?php
  if (isset($_SESSION['usuario'])) {

    ?>
<?php include './clases/Coneccion.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset='utf-8'>              
  <title>AGMUN</title>
  <link rel="stylesheet" type="text/css" href="./libs/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="./libs/bootstrap/css/bootstrap-theme.css">  
  <link rel="stylesheet" type="text/css" href="./libs/bootstrap/css/estilo.css">
  <link rel="shortcut icon" href="./img/banderaes.jpg">
</head>
<body>

<!--menu-->

<div class="navbar-wrapper">
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              
                    
                        
              <a class="navbar-brand" href="">Sistema de votaciones AGMUN</a>
            </div>
            <div class="navbar-collapse collapse navbar-right">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Inicio</a></li>
                 <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">REGISTROS<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="frmCandidatura.php">Registrar Tipo de Candidatura </a></li>
                    <li class="divider"></li>
                    <li><a href="frmPartido.php">Registrar Partidos</a></li>
                    <li><a href="frmUsuario.php">Registrar Usuarios</a></li>
                  </ul>
                </li> 
                <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">Modificar & Eliminar<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                       <li><a href="manejadorPartido.php?accion=con">Modificar Partidos</a></li>
                       <li><a href="manejadorCandidato.php?accion=con">Modificar Candidatos</a></li>
                       <li><a href="manejadorUsuario.php?accion=con">Modificar Usuario</a></li>
                     <li class="divider"></li>
                     
                  </ul>
                </li> 
                
              <li class="dropdown">
                  <a href="" class="dropdown-toggle" data-toggle="dropdown">Ayuda<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="">Acerca de...</a></li>
                     <li class="divider"></li>
                    <li><a href="">Manual de Usuario</a></li>
                  </ul>
                </li>
              <li ><a href="./login/cerrar.php">Cerrar Sesión</a></li>
              </ul>
             
            </div>
             
          </div>
  </div>
</div>
<!--fin menu-->

<br>

<!-- cuerpo -->
<div class="container">
  <!-- REGISTRAR USUARIOS -->
<div class="row">
<div>

<br>
<center><header class="label label-warning" id="dropdown-menu">
<h3>Elecciones compañia AGMUN<br>
<span>¡El Salvador!</span></h3>
</header>
<hr>    

<form class="form-horizontal" role="form" method="post" action="" id="regu">
  <div class="form-group">

     <h4><a href="frmCandidatura.php" class="label label-warning" id="dropdown-menu"><span>Apertura de Elecciones</span></a></h4><br>
     <h4><a href="frmPartido.php" class="label label-warning" id="dropdown-menu"><span>Inscripción de Partidos</span></a></h4><br>
     <h4><a href="frmCandidato.php" class="label label-warning" id="dropdown-menu"><span>Inscripción de Candidatos</span></a></h4><br>
     <h4><a href="frmUsuario.php" class="label label-warning" id="dropdown-menu"><span>Inscripción de Usuario</span></a></h4><br>
         </div>
  </center>
 
<?php 

 
 ?>

<script src="./libs/bootstrap/js\jquery-1.10.2.min.js"></script>
<script src="./libs/bootstrap/js\bootstrap.min.js"></script>
<script src="./libs/bootstrap/js\docs.min.js"></script>
</body>
</html>
<?php }else{
  header("Location:./inicio de sesion/login.php");
} ?>