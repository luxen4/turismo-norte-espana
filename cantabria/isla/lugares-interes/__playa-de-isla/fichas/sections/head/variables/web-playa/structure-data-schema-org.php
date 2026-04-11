<?php
// Datos estructurados Schema.org (mainEntity)

$mainEntity_description = 'La Playa de Isla es famosa por su amplia extensión de arena fina y sus excelentes condiciones para disfrutar del mar y actividades al aire libre.';
$mainEntity_addressLocality = $nombre_playa;  // Asegúrate que $nombre_playa = 'Isla'
$mainEntity_addressRegion = $region;          // Cantabria
$mainEntity_addressCountry = 'España';

// Coordenadas geográficas (aproximadas para Playa de Isla)
$mainEntity_geo_latitude = 43.4450;   
$mainEntity_geo_longitude = -3.4150;

// Imagen representativa y URL canónica
$mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/img/{$rutas}.jpg";
$mainEntity_url = PATH_RAIZ . "{$rutas}";
?>