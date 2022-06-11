de aqui para proyectoADMIN
agarra los datos para editarlos
intentar con get paraq que los mande

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
        
            con get

            