<?php
// Datos estructurados Schema.org (mainEntity) para Playa de Laredo

$mainEntity_description = 'La Playa de Laredo es famosa por su extensa playa y excelentes servicios, ideal para toda la familia.';
$mainEntity_addressLocality = $nombre_playa; // Ejemplo: 'Laredo'
$mainEntity_addressRegion = $region;         // Ejemplo: 'Cantabria'
$mainEntity_addressCountry = 'España';

// Coordenadas geográficas de Playa de Laredo (ajusta si tienes otras)
$mainEntity_geo_latitude = 43.4046;
$mainEntity_geo_longitude = -3.4415;

// Imagen representativa y URL canónica
$mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/img/{$rutas}.jpg";
$mainEntity_url = PATH_RAIZ . "{$rutas}";
?>