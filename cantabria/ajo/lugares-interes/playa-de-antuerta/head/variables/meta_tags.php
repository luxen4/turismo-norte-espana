<?php
$site_verification_content = SITE_VERIFICATION_CONTENT; // Igual que antes, cambia si es otro

// Pinterest
$pinterest_property_card_card_content        = SUMARY_LARGE_IMAGE;
$pinterest_property_card_title_content       = LUGAR. ' – '.$localidad.', '.$region;
$pinterest_property_card_description_content = 'Descubre la '.LUGAR.' en '.$localidad.', '.$region.': un rincón virgen junto al mar Cantábrico, perfecto para surf, senderismo y desconexión en la naturaleza.';
$pinterest_property_card_image_content       = PATH_RAIZ_LOCALIDADES_CARPETA . '/'.$region.'/'.$localidad.'/img/'.LUGAR_MINUSCULA.'-'.$localidad_minuscula.'-'.$region_minuscula.'-1.jpg';

// Twitter Cards
$twitterCards_card        = SUMARY_LARGE_IMAGE;
$twitterCards_site        = CARD_SITE;
$twitterCards_title       = LUGAR. ' – '.$localidad.', '.$region;
$twitterCards_description = 'Explora la '.LUGAR.', una joya natural en '.$localidad.', '.$region.': olas perfectas para surf, senderos costeros y vistas inolvidables del Cantábrico.';
$twitterCards_image       = PATH_RAIZ_LOCALIDADES_CARPETA . '/'.$region.'/'.$localidad.'/img/'.LUGAR_MINUSCULA.'-'.$localidad_minuscula.'-'.$region_minuscula.'-1.jpg';
$twitterCardSs_url         = PATH_RAIZ_LOCALIDADES_CARPETA . '/'.$region.'/'.$localidad.'/index.php'; // Puedes usar un slug más específico si lo tienes


// Open Graph
$graph_Meta_Tags_property_title        = LUGAR. ' – '.$localidad.', '.$region;
$graph_Meta_Tags_property_description  = 'Visita la '.LUGAR.' en '.$localidad.', una playa virgen con acantilados y vistas al mar Cantábrico. Ideal para surfistas y amantes de la naturaleza.';

$graph_Meta_Tags_property_image = PATH_IMAGEN_PRESENTACION_PLAYA;
$graph_Meta_Tags_property_url   = PATH_DOMINIO_RAIZ_LOCALIDADES_REGION_LOCALIDAD.'/index.php';


require PATH_RAIZ_BLOQUES_ESTRUCTURA_PAGINAS_PLAYA_HEAD. '/graph_Meta_Tags_property-generico.php'; ?>