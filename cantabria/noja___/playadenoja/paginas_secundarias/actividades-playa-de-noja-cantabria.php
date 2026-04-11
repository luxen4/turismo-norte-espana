<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Actividades en la Playa de Noja – Cantabria</title>

 

    <?php // Variables para la página de la Playa de Noja
    require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/cantabria/playadenoja/fichas/sections/head/variables/web-playa/localizacion-playa.php';
    require $_SERVER['DOCUMENT_ROOT'] . '/turismo-norte-espana/bloques/estructura/variables_comunes/defines.php'; ?>

    <?php /*<!--🧭 Canonical URL (evita contenido duplicado en SEO)-->*/ ?>
    <link rel="canonical" href="<?= PATH_RAIZ; ?>/actividades-<?= $rutas; ?>" />

    <?php require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/fichas/sections/head/etiquetas_meta_actividades.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/link_paginas_secundariass_head_actividades.php"; ?>

    <?php
    // Descripción general y URL
    $url = "https://playas2024.kesug.com/turismo-norte-espana/{$region_minuscula}/{$localidad_minuscula}/fichas/{$rutas}.php";
    ?>

    <?php 
    require PATH_RAIZ_LOCALIDADES . "/{$region_minuscula}/{$localidad_minuscula}/fichas/sections/head/variables/web-playa/structure-data-schema-org.php";
    include_once PATH_RAIZ_BLOQUES_ESTRUCTURA . "/structured_data_generico.php";
    ?>
  </head>

  <body>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/actividades_bloque_generico.php"; ?>
    <?php require PATH_RAIZ_BLOQUES_ESTRUCTURA . "/js_bootstrap/scripts-bootstrap2.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeo5F2bSpV8CkR0VZ3HSMa7PR9U8D7V7B2E5uVOlmXJURyJA"
            crossorigin="anonymous"></script>
  </body>
</html>