<?php
    // Variables específicas para Playa de Laredo
    $descripcion = 'Descubre la Playa de Laredo, una hermosa playa de arena fina y dorada, famosa por su longitud y excelente ambiente para deportes acuáticos y turismo familiar en Cantabria.';
    
    $region_minuscula = 'cantabria';  // asegúrate de definir esta variable según tu estructura
    $localidad_minuscula = 'playadelaredo';       // carpeta correspondiente a Laredo
    $rutas = 'index';                 // nombre del archivo sin extensión o según tu estructura
    
    $url = PATH_RAIZ_LOCALIDADES_CARPETA."/{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Laredo es reconocida por su extensa playa de arena fina, ideal para paseos y deportes como el surf.';
    $localidad = 'Laredo';
    $region = 'Cantabria';
    $country = 'España';

    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.4162;  // Latitud aproximada de Laredo
    $mainEntity_geo_longitude = -3.4439; // Longitud aproximada de Laredo

    $mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/{$rutas}.jpg"; // Ruta a imagen representativa
    $mainEntity_url =  PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";
?>