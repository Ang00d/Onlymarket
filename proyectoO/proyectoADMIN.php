<?php
      
      $conexion = mysqli_connect('localhost', 'root', '', 'onlymarket1')
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
             $id = $_POST['id'];
             $nom = $_POST['nom'];

             $consulta = "INSERT INTO proyecto (ID, NOMBRE) VALUES('$id', '$nom')";
             mysqli_query($conexion, $consulta);
             mysqli_close($conexion);
             echo "<script languaje='javascript'> alert ('Ha AGREGADO el nuevo producto correctamente')</script>";

         }


         function eliminar
         ($conexion){
            $id = $_POST['id'];


            $consulta = "DELETE FROM proyecto WHERE ID='$id'";
            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
            echo "<script languaje='javascript'> alert ('Ha ELIMINADO su producto correctamente')</script>";

        }




?>