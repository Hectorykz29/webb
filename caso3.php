<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Venta de producto</title>
</head>
<body>
    <h1>Venta de producto</h1>
    <form action="" method="post">
        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" id="cantidad">
        <br>
        <input type="submit" value="Procesar">
        <input type="reset" value="Limpiar">
    </form>

    <?php
        if (isset($_POST['cantidad'])) {
            $cantidad = $_POST['cantidad'];

            // Precio unitario del producto
            $precio = 20.55;

            // Importe de la compra
            $importe_compra = $cantidad * $precio;

            // Importe del descuento
            $importe_descuento = $importe_compra * 0.1;

            // Importe neto
            $importe_neto = $importe_compra - $importe_descuento;

            // Mostrar resultados
            echo "<h2>Resultados</h2>";
            echo "Cantidad: $cantidad";
            echo "<br>";
            echo "Precio unitario: $precio";
            echo "<br>";
            echo "Importe de la compra: $importe_compra";
            echo "<br>";
            echo "Importe del descuento: $importe_descuento";
            echo "<br>";
            echo "Importe neto: $importe_neto";
        }
    ?>
</body>
</html>
