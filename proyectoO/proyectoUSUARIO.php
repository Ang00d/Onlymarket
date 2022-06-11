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
             $num = $_POST['num'];
             $pre = $_POST['pre'];

             $consulta = "INSERT INTO proyecto (ID, NOMBRE,PRESIO)
             VALUES('$num', '$nom', '$pre')";
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
            header("refresh:1;url=VistaUs.html");
        }




?>