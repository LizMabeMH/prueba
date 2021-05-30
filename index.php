<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="Erika Eliana Marconi Villca">
	<meta name="KEYWORDS" content="Proyecto de Grado">
	<meta name="description " content="pagina de mi proyecto de grado">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PROYECTO-ERIKA</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/E.jpg">
	<link rel="stylesheet"  href="css/bootstrap.min.css">
</head>
<body>
  <section class="container">
   <div class="row bg-light">
   	 <div class="my-2"></div>
   	 <div class="col-sm-12 col-md-12 col-lg-6 float-left my-5">
     <article class="" style="text-align: justify;">
       <h3 class="display-4 text-uppercase text-center font-weight-bold">Curso DPW-II, proyecto PRIMERA ETAPA</h3>
       <h4 class="text-uppercase text-danger font-italic">Nombre del proyecto:</h4>
       <p class="lead text-justify font-weigth-bold font-italic">“SISTEMA WEB DE CONTROL Y SEGUIMIENTO DE INVENTARIO”
        CASO: EMPRESA UNIPERSONAL” CLAUDIA ALLEN PINTO”</p>
        <h4 class="text-uppercase text-danger font-italic">Objetivo General del proyecto:</h4>
        <p class="lead text-justify font-weigth-bold font-italic">Desarrollar un sistema web que permita mostrar el control y seguimiento del inventario de los productos de la empresa unipersonal CLAUDIA ALLEN PINTO.</p>
        <h4 class="text-uppercase text-danger font-italic">Objetivo Especificos del proyecto:</h4>
        <p class="lead text-justify font-weigth-bold font-italic"> Se realizan registros manuales del control de inventario</p>
        <p class="lead text-justify font-weigth-bold font-italic">   No se realiza un seguimiento y control adecuado de la comercialización.</p>
        <p class="lead text-justify font-weigth-bold font-italic">   Se tiene información desactualizada sobre el inventario.</p>
        </article>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 float-left my-2">
          <form class="bg-secondary p-3 m-5 rounded" action="lib/checklogin.php" method="POST">
          <?php
          if(isset($_GET['msg'])){//obtiene el mensaje que manda el cheklogin a la url
            echo "<center><div class='alert alert-danger'><span>".$_GET['msg']."</span></div></center>";
          }
          ?>
          <?php

          error_reporting(E_ALL ^ E_NOTICE);//DEJA MOSTRAR NOTIFICACIONES
          if($_GET["error"]=="si"){
            echo'<div class="alert alert-danger" role="alert"><center<strong>Ops!-Verifica tus datos.</strong></center></div>';
          }
          else{echo "";}
          ?>
          <h2 class="display-5 text-center fw-bold">USUARIO</h2>
          <div><img src="img/Erika.jpg" width="250px" class="mx-auto rounded-circle circle-image d-block my-4"></div>
          <div class="form-group mb-3">
            <input type="email" class="form-control" placeholder="Introduzca usuario" name="user" id="user">
          </div>
          <div class="form-group ">
            <input type="password" class="form-control" placeholder="Introduzca contraseña" name="pass" id="pass">
          </div>
          <div class="my-4">
          <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description text-dark">Recordar contraseña en esta computadora</span>
          </label>
        </div>
        <div class="form-group d-grid gap-2 mb-3">
        <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg">Iniciar Sesion</button>
        <span><a class="btn btn-danger btn-block btn-lg d-grid gap-2" href="index.php">Limpiar Datos</a></span>
        </div>
        </form>
        </div>
        </div>

   </section>

<script src="js.bootstrap.min.js"></script>
<script src="js/pooper.min.js"></script>
</body>
</html>