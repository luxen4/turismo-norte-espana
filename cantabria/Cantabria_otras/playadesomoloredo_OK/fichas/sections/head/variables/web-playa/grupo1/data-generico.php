<?php
    $descripcion = 'Descubre la Playa de Somo - Loredo, una de las mejores playas del norte de España para practicar surf, disfrutar de largos paseos y relajarse en plena naturaleza costera.';
    $url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/{$rutas}.php";

    $mainEntity_description = 'La Playa de Somo - Loredo se caracteriza por su amplitud, arena fina y excelentes olas para la práctica del surf. Es uno de los principales destinos costeros de Cantabria.';
    $mainEntity_addressLocality = $localidad;
    $mainEntity_addressRegion = $region;
    $mainEntity_addressCountry = $country;

    // Coordenadas geográficas de la Playa de Somo - Loredo (aproximadas)
    $mainEntity_geo_latitude = 43.4643;
    $mainEntity_geo_longitude = -3.7335;

    // Imagen y URL canónica corregidas
    $mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/img/{$rutas}.jpg";
    $mainEntity_url = PATH_RAIZ . "{$rutas}";
?>