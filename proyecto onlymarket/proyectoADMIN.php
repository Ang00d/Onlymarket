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
             $id = $_POST['id'];

             $consulta = "INSERT INTO proyecto (ID)
             VALUES('$id')";
             mysqli_query($conexion, $consulta);
             mysqli_close($conexion);
             echo "<script languaje='javascript'> alert ('Ha agregado el nuevo producto correctamente')</script>";

         }


         function eliminar
         ($conexion){
            $id = $_POST['id'];


            $consulta = "DELETE FROM proyecto WHERE ID='$id'";
            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
            echo "<script languaje='javascript'> alert ('Ha comprado su producto correctamente')</script>";

        }




?>