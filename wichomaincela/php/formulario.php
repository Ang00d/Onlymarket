<?php
      
      $conexion = mysqli_connect('localhost', 'root', '', 'onlymarket')
      or die (mysql_error($mysqli));

    diferencia($conexion);
    
      function diferencia ($conexion){
      if(isset($_POST['en'])){
        insertar ($conexion);

      }
      if(isset($_POST['com'])){
        eliminar ($conexion);
    
     }
    }


       
         function insertar($conexion){
  
             $nom = $_POST['nom'];
             $ape = $_POST['ape'];
             $email = $_POST['email'];
             $pago = $_POST['pago'];

             $consulta = "INSERT INTO clientes (NOMBRE, APELLIDO, EMAIL, PAGO) VALUES( '$nom', '$ape', '$email', '$pago')";
             mysqli_query($conexion, $consulta);
             mysqli_close($conexion);
             echo "<script languaje='javascript'> alert ('Se han ENVIADO sus datos correctamente')</script>";
             header("refresh:1;url=../html/usuario.html");
         }


         function eliminar
         ($conexion){
            $id = $_POST['id'];
            $consulta = "DELETE FROM clientes WHERE ID='$id'";
            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);            
            echo "<script languaje='javascript'> alert ('Ha ELIMINADO los datos correctamente')</script>";
            header("refresh:1;url=../html/usuario.html");
        }

      


?>