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
             $num = $_POST['num'];

             $consulta = "INSERT INTO proyecto (ID, NOMBRE)
             VALUES('$num', '$nom')";
             mysqli_query($conexion, $consulta);
             mysqli_close($conexion);

         }


         function eliminar
         ($conexion){
            $num = $_POST['num'];


            $consulta = "DELETE FROM proyecto WHERE ID='$num'";
            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);
            echo "<script languaje='javascript'> alert ('Ha comprado su producto correctamente')</script>";

        }




?>