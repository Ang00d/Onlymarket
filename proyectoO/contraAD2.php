<html>
<?php

$con = $_POST['con'];{

switch ($con) {
    case '12345':
       header("location: VistaAdmin.html");
        break;
    
    default:
        echo "<center>"."<font size=6>"."uste no es admin, no pasa gei"."</font>"."<br>"."<br>"."<img src=img/no.png width=800 height=600>";
        break;
    }
}

        ?>
</html>