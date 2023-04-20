<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Actividad 1</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/Actividad_1.css">
    </head>
    <body>
        <div class="cajetilla">
            <h1>Sueldo Neto</h1>
            
            <form method="post" action="">
               

                <p class="default">El trabajador tendrá como sueldo básico S/. 600.00</p>
                <p>Número de hijos:</p>
                <input type="text" name="num_hijos"><br>
                <p>Importe del total vendido en el mes:</p>
                <input type="text" name="tot_vendido"><br>


                
                <button type="submit" value="calcular" name="calcular">Calcular</button>
            </form>
            
            <?php
                
                $a= (!empty($_POST['num_hijos'])) ? $_POST['num_hijos'] : 0;
                $b= (!empty($_POST['tot_vendido'])) ? $_POST['tot_vendido'] : 0;                

                $hijos = $a*50;
                $vendido = $b*0.075;
                $s_bruto = 600+$hijos+$vendido;
                $descuento = $s_bruto*0.11;
                $s_neto= $s_bruto*0.89;
                
                echo "<p>Hijos: S/. ".$a."</p>";
                echo "<p>Importe del total vendido en el me: S/. ".$b."</p><br>";

                echo "<p>Bonificación por hijos (50 por hijo): S/. ".$hijos." </p>";
                echo "<p>Comisión (7.5% de lo vendido del mes): S/. ".$vendido."</p>";
                echo "<p>Sueldo bruto: S/. ".$s_bruto." </p>";
                echo "<p>Descuento (11% del S. bruto por ley): S/. ".$descuento." </p>";
                echo "<p>Sueldo neto: S/. ".$s_neto." </p>"
            ?>
        </div>
    </body>
    <script src="../js/ejercicio_5.js"></script>
</html>