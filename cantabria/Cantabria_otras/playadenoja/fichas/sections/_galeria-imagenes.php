<section id="galeria" class="map container my-5">

<?php // Carrusel de 3 Imágenes //
LUGAR = 'playadenoja';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2026/'.$region.'/'.LUGAR.'/img';
$imges_name = ['/playa-de-trengandin.jpg', '/vista-aerea-playa-noja.jpg', '/rocas-playa-noja.jpg'];
$alt = ["Vista de la Playa Trengandin", "Vista aerea de la Playa de Noja", "Rocas en la Playa de Noja"];
require './../../../../../bloques/estructura/carruseles/carruselimagenes/carruselgenerico.php'; ?>


<?php // Galeria 3 imagenes
    LUGAR = 'playadenoja';
    $ruta = './../../../../../bloques/'.$region.'/'.LUGAR.'/img';
    $imges_name = ['/vista-playa-noja.jpg', '/atardecer-playa-noja.jpg', '/playa-ris.jpg'];
    $alt = ["Vista aerea de la Playa de Noja", "Atardecer en la Playa de Noja", "Actividades en la Playa de Noja"];
    require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>

</section>