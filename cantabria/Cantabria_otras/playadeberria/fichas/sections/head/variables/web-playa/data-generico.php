<?php
    $region = 'Cantabria';
    $localidad = 'Santona';
    $country = 'España';
    $region_minuscula = strtolower($region);
    $localidad_minuscula = 'playadeberria'; // nombre de la carpeta para esta playa
    $rutas = 'playa-de-berria-cantabria';

    $descripcion = 'Descubre la Playa de Berria, una extensa playa en Santona con arena fina y un entorno natural protegido, perfecta para el relax y deportes acuáticos.';

    $url = PATH_RAIZ_LOCALIDADES_CARPETA."/{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Berria destaca por su larga extensión, su fina arena y su ubicación en un entorno natural protegido, ideal para familias y amantes del surf.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.4197;  // Coordenadas aproximadas reales de Playa de Berria
    $mainEntity_geo_longitude = -3.4781;

    $mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/{$rutas}.jpg";
    $mainEntity_url = $url;
?>