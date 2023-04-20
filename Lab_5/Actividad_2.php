<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Actividad 2</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/Actividad_2.css">
    </head>
    <body>
        <div class="cajetilla">
            <h1>Gaseosa</h1>
            
            <form method="post" action="">
               

                <p class="default">Promoción válida para unidades de 3 L</p>
                <p>Precio actual de la gaseosa:</p>
                <input type="text" name="precio"><br>
                <p>Unidades adquiridas:</p>
                <input type="text" name="n_gaseosas"><br>


                
                <button type="submit" value="calcular" name="calcular">Calcular</button>
            </form>
            
            <?php
                
                $a= (!empty($_POST['precio'])) ? $_POST['precio'] : 0;
                $b= (!empty($_POST['n_gaseosas'])) ? $_POST['n_gaseosas'] : 0;                

                $precio = $a*0.95;
                $compra = $precio*$b;
                $descuento = $compra*0.07;
                $pago_final = $compra-$descuento;
                $caramelos = $b*2;

                echo "<p>Precio original: ".$a."</p>";
                echo "<p>Precio original: ".$b."</p><br>";

                echo "<p>Nuevo precio: S/. ".$precio;
                echo "<p>Importe de la compra: S/. ".$compra."</p>";
                echo "<p>Importe del descuento: S/. ".$descuento."</p>";
                echo "<p>Importe a pagar: S/. ".$pago_final."</p>";
                echo "<p>Caramelos de obsequio: ".$caramelos."</p>"
            ?>
        </div>
    </body>
    <script src="../js/ejercicio_5.js"></script>
</html>