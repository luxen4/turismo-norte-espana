<?php
    $region = 'Cantabria';
    $localidad = 'Noja';
    $country = 'España';
    $region_minuscula = strtolower($region);
    $localidad_minuscula = 'playadenoja'; // nombre de la carpeta para esta playa
    $rutas = 'playa-de-noja-cantabria';

    $descripcion = 'Descubre la Playa de Noja, un destino ideal en la costa cántabra para disfrutar de paisajes naturales, aguas cristalinas y actividades al aire libre.';

    $url = PATH_RAIZ_LOCALIDADES_CARPETA."/{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Noja destaca por su belleza natural, su fina arena dorada y sus condiciones ideales para disfrutar en familia o practicar surf.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.4897;  // Coordenadas reales aproximadas
    $mainEntity_geo_longitude = -3.5231;

    $mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/{$rutas}.jpg";
    $mainEntity_url = $url;
?>