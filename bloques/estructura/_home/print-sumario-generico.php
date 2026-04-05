
<?php // Recorremos las localidades
foreach ($localidades as $localidad => $playas) {
    $localidad_minuscula = strtolower(str_replace('ñ', 'n', $localidad)); 
    require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/localidad-generico.php';

    echo '<div class="container my-4"><div class="row">';
    
    foreach ($playas as $playa) {
        $playa_name = $playa['nombre'];
        $playa_name_minuscula = strtolower(str_replace(' ', '-', $playa_name));
        $archivo_name = $playa['archivo'];
        $presentacion = $playa['presentacion'];

        $pATH_HREF_RAIZ_LOCALIDADES_REGION_LOCALIDAD_LUGARES_INTERES_PLAYAS =
          "/Blog_Playas2026/{$region_minuscula}/{$localidad_minuscula}/lugares-interes/{$archivo_name}";
        ?>
        <div class="col-12 col-md-6 mb-4">
          <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA_HOME . '/body/card-playa.php'; ?>
        </div>
        <?php
    }
    echo '</div></div>';
}
?>

<!-- Bloque publicidad -->
<div class="row">
  <div class="col-12 text-center">  
    <?php require $publicidad; ?>
  </div>
</div>