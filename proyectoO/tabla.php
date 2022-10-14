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
        <link rel="stylesheet" href="styleCons.css">
    </head>
<body>
<header id="titulo">
        <h1 id="titulo">Consulte todo lo necesario</h1>
    </header>

      <table>
           <tr>
                 <th>ID</th>
                 <th>PRODUCTO</th>
                 <th>PRECIO</th>
            </tr>

            <?php
            $sql="SELECT * from proyecto";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['ID']   ?></td>
                <td><?php echo $mostrar['NOMBRE']   ?></td>
                <td><?php echo $mostrar['PRESIO'] ?></td>
            </tr>

            <?php
            }
            ?>
      </table>
      <footer>
        <section>
        <a href="#titulo">Ir al comienzo</a>
        <a href="https://cdn.discordapp.com/attachments/843973149561192468/979158316271935560/images_6.jpeg">Puede contactarnos aquí</a>
    </section>
        <p>OnlyMarket 2022</p>
      
    </footer>


</html>