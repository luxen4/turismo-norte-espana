<?php
    $region = 'País Vasco Francés'; $region='francia';
    $localidad = 'Hendaya';
    $country = 'Francia';
    $region_minuscula = strtolower(str_replace(' ', '', $region)); // para carpeta sin espacios
    $localidad_minuscula = 'playadehendaya'; // nombre de la carpeta para esta playa
    $rutas = 'playa-de-hendaya-francia';

    $descripcion = 'Descubre la Playa de Hendaya, una extensa playa francesa en el País Vasco, ideal para el surf, el relax y disfrutar del mar en un entorno natural privilegiado.';

    $url = PATH_RAIZ_LOCALIDADES_CARPETA."/{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Hendaya es famosa por su gran longitud, arena fina y olas perfectas para el surf, ubicada en un entorno natural muy apreciado por turistas y locales.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.3633;  // Coordenadas aproximadas reales de Playa de Hendaya
    $mainEntity_geo_longitude = -1.7850;

    $mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/{$rutas}.jpg";
    $mainEntity_url = $url;
?>