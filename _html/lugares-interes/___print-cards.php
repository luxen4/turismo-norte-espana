
<?php
$ruta_csv = __DIR__ . '/data.csv';

$lugares_interes = [];

if (($handle = fopen($ruta_csv, "r")) !== false) {
    $cabeceras = fgetcsv($handle, 1000, ","); // primera fila

    while (($data = fgetcsv($handle, 1000, ",")) !== false) {
        $lugares_interes[] = array_combine($cabeceras, $data);
    }

    fclose($handle);
}
?>
<?php require PATH_RAIZ . '/_html/localidades/print-cards-lugares-interes.php'; ?>