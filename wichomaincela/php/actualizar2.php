<?php
    $conexion=mysqli_connect('localhost', 'root', '', 'onlymarket');


?>
<!DOCTYPE html>
<html>
    <head>
        <title>tabla de productos Onlymarket</title>
        <title>OnlyMarket</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="CSS/styleCA.css">
    </head>
<body>
<header id="titulo">
        <h1 id="titulo">EDITE LO QUE QUIERA </h1>
    </header>
    <?php
      $id=$_GET['id'];  
      $nom=$_GET['nom'];
      $pre=$_GET['pre'];
      ?>
    <form action="actualizar3.php" method="post">
        <table>

            <tr>
                <td>NOMBRES:</td>
                <td><input type="text" name="NOMBRE"  value="<?=$nom?>"  ></td>
            </tr>
            <tr></tr>
                <td>PRECIO:</td>
                <td><input type="text" name="PRECIO" value="<?=$pre?>"></td>
            </tr>
       
                <td><input type="submit" value="Actualizar" ></td>
                <td><a href="../html/admin.html">Cancelar</a></td>
     
            </tr>
            
        </table>

    </form>

</center>
</body>
</html>