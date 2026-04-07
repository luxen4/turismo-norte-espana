<div class="container-xxl py-4">
  <div class="row">
    <div class="col-xl-9 col-lg-8 col-md-8 col-sm-12 col-12">
      <?php require PATH_RAIZ . '/_estructura/semantica/body/main-generico.php'; ?>
      <?php //require PATH_RAIZ_LOCALIDAD_LUGARES_INTERES_BODY . '/main.php'; ?>
    </div>

    <div class="col-xl-3 col-lg-4 col-md-4 d-none d-md-block sidebar-anuncios">
                <?php // require PATH_RAIZ . '/_estructura/semantica/sidebar-playa.php'; ?>
        <?php //require PATH_RAIZ . '/_estructura/publicidad/getYourGuide/index.php'; ?>    
        <?php require PATH_RAIZ . '/_anuncios/get-your-guide/index.php'; ?>
    </div>

  </div>
</div>


<?php /*
<div class="bg-white border border-gray-300 rounded-lg shadow-sm p-3">
  <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_ANUNCIOS_JS . "/anuncios-add-cash.php"; ?>
</div> */ ?>

<?php /*
$pathConPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/playas/".LUGAR_MINUSCULA."/body/main.php"; 
$pathSinPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/".$lugar_minuscula."/body/main.php";
//$pathSinPlayas = PATH_RAIZ_LOCALIDAD_LUGARES_INTERES . "/".LUGAR_MINUSCULA."/body/main.php"; 
//var_dump($pathConPlayas, $pathSinPlayas);

try {
    if (file_exists($pathConPlayas)) {
        require $pathConPlayas;
    } elseif (file_exists($pathSinPlayas)) {
        require $pathSinPlayas;
    } else {
        throw new Exception("Archivo pre-html.php no encontrado en ninguna rrruta.");
    }
} catch (Exception $e) {
    // Aquí puedes manejar el error: mostrar mensaje, log, redirección, etc.
    echo "<p style='color:red;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
    // Opcional: log error
    error_log($e->getMessage());
}*/
?>