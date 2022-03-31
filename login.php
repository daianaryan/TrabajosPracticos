<?php
 
 #Inicializamos variables de Sesion
 session_start();

 
 #Validar Datos
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if (($_POST['inputText']=="administracion_cobranzas@aca.org.ar") 
   || ($_POST['inputText']=="colllina@aca.org.ar")
   || ($_POST['inputText']=="debiauto@aca.org.ar")
      ){
        $_SESSION['usuario'] = 'user';       
        //$_SESSION['usuario'] = $_REQUEST['inputText'];;       
        //$email = $_POST['inputText'];
        //echo $_POST['inputText'];
        #Redireccionamos porque ingreso OK      
        header("location: ../listados.php");                
        die();     
      } else {
        if (($_POST['inputText']=="administracion@aca.org.ar") ){
            $_SESSION['usuario'] = 'admin';       
            //$_SESSION['usuario'] = $_REQUEST['inputText'];    
             //$email = $_POST['inputText'];
             //echo $_POST['inputText'];         
             header("location:../admin/usuarios.php");                          
             die();
            } else {
              #echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';              
              header("location:login.php");                                 
              die();
            }
            #echo '<script> alert("Usuario y/o Contraseña incorrecta");</script>';            
            header("location:login.php");                             
            die();
          }                   
        }       
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Login de Usuario</title>   
    <!-- Bootstrap CSS-->        
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">    
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="./css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center bg-light">
    
    <form class="form-signin mt-5" action="login.php" method="POST">
      <div class="container w-25 shadow-lg">                
        <div class="container-fluid w-75">
          <img class="position-relative text-decoration-transparent logo mt-4" width="100" src="../img/LOGOACA.jpg" alt="logo">
          <h1 class="h3 mb-3 font-weight-normal mt-4" style="font-size: 18px">Ingresar al sistema</h1>                             
          <br>
          <div class="mb-3">
            <input type="text" name="inputText" class="form-control" style="font-size: 14px" placeholder="Correo Electronico" required autofocus>
          </div>
          <!--<div class="mb-3"><input type="password" id="inputPassword" name="inputPassword"class="form-control"  style="font-size: 14px" placeholder="Contraseña" required></div>-->
          <div class="p-2">
            <button class="btn btn-outline-danger btn-md btn-block mt-2 mb-2" id="enviarLogin" name="enviarLogin" style="font-size: 14px" type="submit">Ingresar</button> 
          </div>            
        </div>        
      </div>
    </form>    
  
  </body>
  </html>

  <?php

//if(isset($_POST['enviarLogin'])) {
  //if(empty($_POST["inputText"])){
    //  echo "El correo electronico es requerido";
  //} else {
  //$email = $_POST["inputText"];
  //echo "Hola $email";
 // if (!preg_match('@', $email)) {
   // $errores[] = "Formato de email incorrecto";
//}
}
  // Más código...
}

    //$email = $_SERVER["PHP_AUTH_USER"] 
    //var_dump($_SESSION);

//include 'conexion.php';     

//$conexion = new conexion('');
//$query= $conexion->consultar("SELECT * FROM `listados` WHERE Mail like '%$email' ORDER BY listados"); 
  //?>

  <script>
$(function () {
  $('[data-toggle="popover"]').popover()
})


  </script>
