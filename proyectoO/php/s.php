<?php
if (isset($_POST['act']))
        {
            $i=$_POST['i'];  
            $n=$_POST['n'];
            $p=$_POST['p'];
            
            $enlace=mysqli_connect("localhost", "root","","pro");
            if(!$enlace)
            {
                echo"Error no existe";
                exit;
            }
            mysqli_query($enlace,"UPDATE noveas SET n='$n',p='$p' WHERE i='$i'");
            echo"<script language='javascript'>alert('Registro actualizado')</script>";
            header("refresh:1;url=VistaAdmin.html");
            mysqli_close($enlace);
        }
?>