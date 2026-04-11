<?php
    $descripcion = 'Descubre la Playa de Isla, un destino conocido por su encanto natural, perfecta para disfrutar del mar y actividades acuáticas en la costa cantábrica.';
    $url = PATH_RAIZ_LOCALIDADES_CARPETA."/{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Isla destaca por su belleza natural y condiciones ideales para el surf y otros deportes acuáticos.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    // Coordenadas aproximadas de la Playa de Isla, Cantabria
    $mainEntity_geo_latitude = 43.4345; // Actualiza si tienes coordenadas más precisas
    $mainEntity_geo_longitude = -3.4110; // Actualiza si tienes coordenadas más precisas

    $mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/{$rutas}.jpg"; // Revisa la ruta y corrige la llave extra
    $mainEntity_url =  PATH_RAIZ . "{$rutas}";
?>