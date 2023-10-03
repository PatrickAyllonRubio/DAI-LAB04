<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Gaseosas</title>
</head>
<body>
    <form method="post" action="">
        Precio actual de la gaseosa: <input type="text" name="precio_actual"><br>
        Cantidad de gaseosas adquiridas: <input type="number" name="cantidad"><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        $precio_actual = $_POST["precio_actual"];
        $cantidad = $_POST["cantidad"];
        $nuevo_precio = $precio_actual * 0.95;
        $importe_compra = $nuevo_precio * $cantidad;
        $descuento = $importe_compra * 0.07;
        $importe_a_pagar = $importe_compra - $descuento;
        $obsequio = $cantidad * 2;

        echo "<h2>Resultados:</h2>";
        echo "Nuevo precio de la gaseosa: $" . $nuevo_precio . "<br>";
        echo "Importe de la compra: $" . $importe_compra. "<br>";
        echo "Importe del descuento: $" . $descuento. "<br>";
        echo "Importe a pagar: $" . $importe_a_pagar. "<br>";
        echo "Caramelos de obsequio: " . $obsequio . "<br>";
    ?>
</body>
</html>
