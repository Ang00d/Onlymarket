<?php
    $conexion=mysqli_connect('localhost', 'root', '', 'onlymarket1');


?>
<!DOCTYPE html>
<html>
    <head>
        <title>tabla de productos Onlymarket</title>
    </head>
<body>

      <table>
           <tr>
                 <td>ID</td>
                 <td>PRODUCTO</td>
            </tr>

            <?php
            $sql="SELECT * from proyecto";
            $result=mysqli_query($conexion,$sql);

            while($mostrar=mysqli_fetch_array($result)){
            ?>

            <tr>
                <td><?php echo $mostrar['ID']   ?></td>
                <td><?php echo $mostrar['NOMBRE']   ?></td>
            </tr>

            <?php
            }
            ?>
      </table>



</html>