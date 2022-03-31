
<?php
    include 'conexion.php';     
    
    session_start();
    
   // $_SESSION['usuario'] = $_REQUEST['inputText'];
   // $email = $_SESSION['usuario'];                      
            
    if(isset($_POST['enviarLogin'])) {
        if(empty($_POST["inputText"])){
            echo "El correo electronico es requerido";
        } else {
            $email = $_SESSION['usuario'];            
            //$email = 'administracion_cobranzas@aca.org.ar';            
      }        
      }


# MOSTRAR LISTA
 $conexion = new conexion();
 $query= $conexion->consultar("SELECT * FROM listados WHERE Mail like '%$email%' ORDER BY listados");
    

?>
