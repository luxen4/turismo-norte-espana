<?php require PATH_RAIZ . "/_estructura/semantica/head/etiquetas-meta.php"; ?>

<?php require PATH_RAIZ . "/_estructura/semantica/head/title-generico.php"; ?>

<?php require PATH_RAIZ . "/_estructura/semantica/head/links-generico.php"; ?>

<?php require PATH_RAIZ . "/_estructura/semantica/head/scripts-generico.php"; ?>

<?php //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/playas/".LUGAR_MINUSCULA."/schemas/schemas-head.php"; ?>









<?php // OK
$pathConPlayas = $_SERVER['DOCUMENT_ROOT'] . "/Blog_Playas2026/" .$region_minuscula."/".$localidad_minuscula."/lugares-interes/".$lugar_minuscula."/schemas/schemas-head.php";
//$pathSinPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/".$lugar_minuscula."/".$lugar_minuscula."/schemas/schemas-head.php"; 
$pathSinPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/".$lugar_minuscula."/schemas/schemas-head.php"; 
//var_dump($pathConPlayas, $pathSinPlayas);


try {
    if (file_exists($pathConPlayas)) {
        require $pathConPlayas;
    } elseif (file_exists($pathSinPlayas)) {
        require $pathSinPlayas;
    } else {
        var_dump($pathConPlayas); ?><br><?php
        var_dump($pathSinPlayas);
        throw new Exception("Archivo pre-htmlS.php no encontrado en ninguna ruta.");
    }
} catch (Exception $e) {
    // Aquí puedes manejar el error: mostrar mensaje, log, redirección, etc.
    echo "<p style='color:red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    // Opcional: log error
    error_log($e->getMessage());
}
?>