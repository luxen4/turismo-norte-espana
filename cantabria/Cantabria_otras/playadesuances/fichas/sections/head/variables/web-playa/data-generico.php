<?php
    $descripcion = 'Descubre la Playa de Suances, un destino emblemático de Cantabria, reconocido por sus olas ideales para surf y su entorno natural privilegiado en la costa cantábrica.';
    $url = PATH_RAIZ_LOCALIDADES_CARPETA."/{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Suances destaca por su arena fina, sus excelentes condiciones para el surf y su ambiente familiar en la costa cantábrica.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    $mainEntity_geo_latitude = 43.4479; // Latitud aproximada de Playa de Suances
    $mainEntity_geo_longitude = -4.1107; // Longitud aproximada de Playa de Suances

    $mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/{$rutas}.jpg"; // Asegúrate que la imagen exista
    $mainEntity_url =  PATH_RAIZ . "{$rutas}";
?>