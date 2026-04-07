<?php require PATH_RAIZ_LOCALIDADES_CARPETA . '/localizacion-localidad.php';?>

<?php
$charset = 'UTF-8';
$vieport_content = 'width=device-width, initial-scale=1.0';
$site_verification_content = 'e148bdbc89c019bd06122ab7bd08a8be';
$description_content = 'Explora los senderos costeros y rutas oficiales en Castro-Urdiales: naturaleza, acantilados, miradores y caminos señalizados en la costa de Cantabria.';
$keywords_content = 'rutas costeras Castro-Urdiales, senderismo Cantabria, senderos señalizados Castro, rutas oficiales mar Cantabria';
$robots_content = 'index, follow';
$author_content = 'Adrián Laya García';
$languaje_content = 'es';
$name_blog = '2025 Guía Costera por el Cantábrico';
?>

<?php // Meta Tags Open Graph ?>
<?php
$graph_Meta_Tags_property_title = 'Senderos Costeros y Rutas Oficiales - Castro-Urdiales';
$graph_Meta_Tags_property_description = 'Guía de senderos señalizados y rutas costeras en Castro-Urdiales: disfruta de la costa cántabra caminando por espacios naturales únicos.';
$graph_Meta_Tags_property_image = PATH_RAIZ_LOCALIDADES_CARPETA . '/img/senderos-castro.jpg';
$graph_Meta_Tags_property_url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/senderos-costeros-rutas-oficiales.php";
$graph_Meta_Tags_property_type = 'website';
?>

<?php // Pinterest ?>
<?php
$pinterest_property_card_card_content = 'summary_large_image';
$pinterest_property_card_title_content = 'Senderos costeros Castro-Urdiales';
$pinterest_property_card_description_content = 'Descubre rutas oficiales y senderos entre el mar y la naturaleza en Castro-Urdiales.';
$pinterest_property_card_image_content = PATH_RAIZ_LOCALIDADES_CARPETA . '/img/senderos-castro.jpg';
?>

<?php // Twitter Cards ?>
<?php
$twiterCards_card = 'summary_large_image';
$twiterCards_site = '@laya_garcia';
$twiterCards_title = 'Senderos y rutas oficiales en Castro-Urdiales';
$twiterCards_descripcion = 'Camina por rutas costeras señalizadas con vistas espectaculares al Cantábrico. Naturaleza, miradores y deporte en Castro-Urdiales.';
$twiterCards_image = PATH_RAIZ_LOCALIDADES_CARPETA . '/img/senderos-castro.jpg';
$twiterCards_url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/senderos-costeros-rutas-oficiales.php";
?>

<?php
// Variables reutilizadas para datos estructurados
$descripcion = 'Red de senderos costeros señalizados en Castro-Urdiales. Camina entre naturaleza y mar por rutas oficiales en la costa cántabra.';
$url = PATH_RAIZ_LOCALIDADES_CARPETA . "/{$region_minuscula}/{$localidad_minuscula}/senderos-costeros-rutas-oficiales.php";

$mainEntity_description = 'Rutas costeras y senderos oficiales para caminar en Castro-Urdiales. Incluye acantilados, miradores y caminos naturales junto al mar.';
$mainEntity_addressLocality = $localidad;
$mainEntity_addressRegion = $region;
$mainEntity_addressCountry = $country;

$mainEntity_geo_latitude = 43.3846;
$mainEntity_geo_longitude = -3.2167;

$mainEntity_image = PATH_RAIZ_LOCALIDADES_CARPETA . '/img/senderos-castro.jpg';
$mainEntity_url = $url;
?>
