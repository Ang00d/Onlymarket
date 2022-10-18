<?php
      $ID=$_POST['ID'];  
      $NOMBRE=$_POST['NOMBRE'];
      $PRECIO=$_POST['PRECIO'];
      
      $enlace=mysqli_connect("localhost", "root","","onlymarket");
      if(!$enlace)
      {
          echo"Error no existe";
          exit;
      }
      mysqli_query($enlace,"UPDATE productos SET NOMBRE='$NOMBRE',PRECIO='$PRECIO' WHERE ID='$ID'");
      echo"<script language='javascript'>alert('Registro actualizado')</script>";
      header("refresh:1;url=../html/admin.html");
      mysqli_close($enlace);
  
?>


