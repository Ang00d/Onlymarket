<?php
    $conexion=mysqli_connect('localhost', 'root', '', 'onlymarket1');


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
                
                <td>ID:</td>
                <td><input type="text" name="ID" value="<?=$id?>" id="" ></td>
            </tr>
            <tr>
                <td>NOMBRES:</td>
                <td><input type="text" name="NOMBRE"  id="" value="<?=$nom?>"  ></td>
            </tr>
            <tr>
                <td>PRECIO:</td>
                <td><input type="text" name="PRESIO" value="<?=$pre?>" id=""></td>
            </tr>
       
                <td><input type="submit" value="Actualizar" ></td>
                <td><a href="VistaAdmin.html">Cancelar</a></td>
     
            </tr>
            
        </table>

    </form>

</center>
</body>
</html>