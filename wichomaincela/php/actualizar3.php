<?php
      $ID=$_POST['ID'];  
      $NOMBRE=$_POST['NOMBRE'];
      $PRESIO=$_POST['PRESIO'];
      
      $enlace=mysqli_connect("localhost", "root","","onlymarket");
      if(!$enlace)
      {
          echo"Error no existe";
          exit;
      }
      mysqli_query($enlace,"UPDATE proyecto SET NOMBRE='$NOMBRE',PRESIO='$PRESIO' WHERE ID='$ID'");
      echo"<script language='javascript'>alert('Registro actualizado')</script>";
      header("refresh:1;url=../html/admin.html");
      mysqli_close($enlace);
  
?>



