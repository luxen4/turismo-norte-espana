<?php
  $region = 'Guipuzkoa'; $region_minuscula = 'gipuzkoa';
  $localidad = 'Deba'; $localidad_minuscula = strtolower($localidad); ?>

<?php // require $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/".LUGAR_MINUSCULA."/pre-html.php"; ?>


<?php
$pathConPlayas = $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/playas/".LUGAR_MINUSCULA."/pre-html.php";
$pathSinPlayas = $_SERVER['DOCUMENT_ROOT'] . "/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/".LUGAR_MINUSCULA."/pre-html.php";


try {
    if (file_exists($pathConPlayas)) {
        require $pathConPlayas;
    } elseif (file_exists($pathSinPlayas)) {
        require $pathSinPlayas;
    } else {
        throw new Exception("Archivo pre-html.php no encontrado en ninguna ruta.");
    }
} catch (Exception $e) {
    // Aquí puedes manejar el error: mostrar mensaje, log, redirección, etc.
    echo "<p style='color:red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    // Opcional: log error
    error_log($e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="es">

  <head>
    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/_estructura/head/head-generico.php"; ?>
  </head>

<body class="bg-<?= COLOR_PAGE; ?>-100">
    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/_estructura/body/header-generico.php"; ?>
    <?php require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/_estructura/body/post-header-generico.php"; ?>


    <?php require PATH_RAIZ . "/_html/body/footer/footer-generico.php"; ?>



    <?php //require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/anuncios/js/logica_anuncios.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap.php"; ?>
    <?php //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/playas/".LUGAR_MINUSCULA."/schemas/schemas-body.php"; ?>


    <?php
    $pathConPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/playas/".LUGAR_MINUSCULA."/schemas/schemas-body.php"; 
    $pathSinPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/".LUGAR_MINUSCULA."/schemas/schemas-body.php"; 

    try {
        if (file_exists($pathConPlayas)) {
            require $pathConPlayas;
        } elseif (file_exists($pathSinPlayas)) {
            require $pathSinPlayas;
        } else {
            throw new Exception("Archivo pre-html.php no encontrado en ninguna ruta.");
        }
    } catch (Exception $e) {
        // Aquí puedes manejar el error: mostrar mensaje, log, redirección, etc.
        echo "<p style='color:red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
        // Opcional: log error
        error_log($e->getMessage());
    }
    ?>
</body>

</html>