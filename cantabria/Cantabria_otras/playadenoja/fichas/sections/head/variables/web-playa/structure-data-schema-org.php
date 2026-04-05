
<?php
// Datos estructurados Schema.org (mainEntity)

$mainEntity_description = 'La Playa de Ostende es famosa por su hermosa arena dorada y sus excelentes condiciones para deportes acuáticos como el surf.';
$mainEntity_addressLocality = $nombre_playa;
$mainEntity_addressRegion = $region;
$mainEntity_addressCountry = 'España';

// Coordenadas geográficas
$mainEntity_geo_latitude = 43.4693;
$mainEntity_geo_longitude = -3.5002;

// Imagen representativa y URL canónica
$mainEntity_image = PATH_RAIZ . "{$region_minuscula}/{$localidad_minuscula}/img/{$rutas}.jpg";
$mainEntity_url = PATH_RAIZ . "{$rutas}";
?> 
