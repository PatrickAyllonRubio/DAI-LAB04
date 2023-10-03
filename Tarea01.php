<!DOCTYPE html>
<html>
<head>
    <title>Calcular sueldo</title>
</head>
<body>
    <form method="post" action="">
        Ingresar Cantidad de hijos en edad escolar: <br> <input type="text" name="hijos"><br>
        Ingresar valor del Importe: <br> <input type="text" name="importe"><br>
        La comision del importe total es de un 7.5% <br>
        El descuento aplicado para el sueldo bruto es de 11% <br>
        Calcular: <br>
        <input type="submit" name="Calcular" value="calcular">
    </form>
<?php
    $hijos=$_POST['hijos'];
    $bonificacion= $hijos * 50;
    $importe=$_POST['importe'];
        $sueldo_bruto= ((600 + ((7.5 / 100) * $importe)) + ($bonificacion));
        $sueldo_neto= ((600 + ((7.5 / 100) * $importe)) + ($bonificacion))-((11 / 100) * ((600+((7.5 / 100) * $importe)) + ($bonificacion)));
    $descuento=((11 / 100) * ((600+((7.5 / 100) * $importe)) + ($bonificacion)));
        echo "Comisión: S/." . $importe . "<br>";
        echo "Bonificación: S/." . $bonificacion ." por ". $hijos ." hijos". "<br>";
        echo "Descuento: S/.". $descuento. "<br>";
        echo "Sueldo Bruto: S/." . $sueldo_bruto. "<br>";
        echo "Sueldo Neto: S/." . $sueldo_neto. "<br>";
?>
</body>
</html>