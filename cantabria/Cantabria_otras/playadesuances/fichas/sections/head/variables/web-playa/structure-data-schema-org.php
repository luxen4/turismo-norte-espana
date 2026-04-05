
<?php
// Datos estructurados Schema.org (mainEntity)

$mainEntity_description = 'La Playa de Suances es conocida por su gran extensión de arena fina y por ser un destino popular para el surf y otras actividades acuáticas en Cantabria.';
$mainEntity_addressLocality = 'Suances';
$mainEntity_addressRegion = $region;
$mainEntity_addressCountry = 'España';

// Coordenadas geográficas (actualiza si tienes coordenadas más precisas)
$mainEntity_geo_latitude = 43.4250;  
$mainEntity_geo_longitude = -4.1185;

// Imagen representativa y URL canónica
$mainEntity_image = PATH_RAIZ . "{$region_minuscula}/playadesuances/img/{$rutas}.jpg";
$mainEntity_url = PATH_RAIZ . "{$rutas}";
?>