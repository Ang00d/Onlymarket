<?php
      $ID=$_POST['ID'];  
      $NOMBRE=$_POST['NOMBRE'];
      $APELLIDO=$_POST['APELLIDO'];
      $EMAIL=$_POST['EMAIL'];
      $PAGO=$_POST['PAGO'];

      $enlace=mysqli_connect("localhost", "root","","onlymarket");
      if(!$enlace)
      {
          echo"Error no existe";
          exit;
      }
      mysqli_query($enlace,"UPDATE clientes SET NOMBRE='$NOMBRE',APELLIDO='$APELLIDO', EMAIL='$EMAIL', PAGO='$PAGO' WHERE ID='$ID'");
      echo"<script language='javascript'>alert('Registro actualizado')</script>";
      header("refresh:1;url=../html/admin.html");
      mysqli_close($enlace);
  
?>