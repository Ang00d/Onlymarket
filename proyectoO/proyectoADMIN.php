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
             $pre = $_POST['pre'];

             $consulta = "INSERT INTO proyecto (ID, NOMBRE, PRESIO) VALUES('$id', '$nom', '$pre')";
             mysqli_query($conexion, $consulta);
             mysqli_close($conexion);
             echo "<script languaje='javascript'> alert ('Ha AGREGADO el nuevo producto correctamente')</script>";
             header("refresh:1;url=VistaAdmin.html");
         }


         function eliminar
         ($conexion){
            $id = $_POST['id'];
            $consulta = "DELETE FROM proyecto WHERE ID='$id'";
            mysqli_query($conexion, $consulta);
            mysqli_close($conexion);            
            echo "<script languaje='javascript'> alert ('Ha ELIMINADO su producto correctamente')</script>";
            header("refresh:1;url=VistaAdmin.html");
        }

        if (isset($_POST['act']))
        {
            $id=$_POST['id'];  
            $nom=$_POST['nom'];
            $pre=$_POST['pre'];
            
            $enlace=mysqli_connect("localhost", "root","","onlymarket1");
            if(!$enlace)
            {
                echo"Error no existe";
                exit;
            }
            mysqli_query($enlace,"UPDATE proyecto SET NOMBRE='$nom',PRESIO='$pre' WHERE ID='$id'");
            echo"<script language='javascript'>alert('Registro actualizado')</script>";
            header("refresh:1;url=VistaAdmin.html");
            mysqli_close($enlace);
        }





?>