
<?php

// Obtener la URL actual
$url = $_SERVER['REQUEST_URI'];

// Quitar barras finales si existen
$url = rtrim($url, '/');

// Separar por /
$partes = explode('/', $url);

// Obtener el último segmento
$lugar_minuscula = end($partes);

// Convertir a formato bonito
$lugar = str_replace('-', ' ', $lugar_minuscula);
$lugar = mb_convert_case($lugar, MB_CASE_TITLE, "UTF-8");

//echo $lugar; // Playa De Cuberris
//echo "<br>";
//echo $lugar_minuscula; // playa-de-cuberris

?>

<?php
$partes = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$region_minuscula = $partes[1] ?? '';
$localidad_minuscula = $partes[2] ?? '';
$lugar_minuscula = end($partes);
?>