<?php
function generarCartonBingo90() {
    $carton = array_fill(0, 3, array_fill(0, 9, ''));

    // Rangos por columna
    $rangos = [
        range(1,9),
        range(10,19),
        range(20,29),
        range(30,39),
        range(40,49),
        range(50,59),
        range(60,69),
        range(70,79),
        range(80,90)
    ];

    // Elegir 5 columnas por fila
    $columnasPorFila = [];
    for ($i = 0; $i < 3; $i++) {
        $cols = range(0,8);
        shuffle($cols);
        $columnasPorFila[$i] = array_slice($cols, 0, 5);
    }

    // Asegurar que cada columna tenga al menos un número
    for ($col = 0; $col < 9; $col++) {
        $fila = rand(0,2);
        if (!in_array($col, $columnasPorFila[$fila])) {
            $columnasPorFila[$fila][array_rand($columnasPorFila[$fila])] = $col;
        }
    }

    // Generar números
    for ($col = 0; $col < 9; $col++) {
        shuffle($rangos[$col]);

        // cuántos números en esta columna
        $filasConNumero = [];
        for ($f = 0; $f < 3; $f++) {
            if (in_array($col, $columnasPorFila[$f])) {
                $filasConNumero[] = $f;
            }
        }

        $cantidad = count($filasConNumero);

        // asignar números ordenados
        $nums = array_slice($rangos[$col], 0, $cantidad);
        sort($nums);

        foreach ($filasConNumero as $i => $fila) {
            $carton[$fila][$col] = $nums[$i];
        }
    }

    return $carton;
}

$carton = null;
if (isset($_POST['generar'])) {
    $carton = generarCartonBingo90();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bingo 90</title>
<style>
    body { font-family: Arial; text-align:center; }
    table { margin:20px auto; border-collapse: collapse; }
    td {
        border:2px solid #000;
        width:50px;
        height:50px;
        font-size:18px;
        text-align:center;
    }
    .empty {
        background:#eee;
    }
    button {
        padding:10px 20px;
        font-size:16px;
    }
</style>
</head>
<body>

<h1>🎲 Cartón de Bingo 90</h1>

<form method="post">
    <button name="generar">Generar Cartón</button>
</form>

<?php if ($carton): ?>
<table>
<?php foreach ($carton as $fila): ?>
<tr>
<?php foreach ($fila as $celda): ?>
    <td class="<?= $celda === '' ? 'empty' : '' ?>">
        <?= $celda ?>
    </td>
<?php endforeach; ?>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

</body>
</html>