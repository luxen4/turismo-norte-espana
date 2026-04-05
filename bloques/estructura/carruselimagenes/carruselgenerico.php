<!-- Carrusel Genérico-->
<section id="galeria" class="container">
    <h5>Galería de imágenes</h5>
    <div id="laredoGallery" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            // Suponiendo que $imges_name es un array con los nombres de las imágenes
            for ($i = 0; $i < count($imges_name); $i++) {
                // Añadir la clase 'active' solo a la primera imagen
                $active_class = $i === 0 ? 'active' : '';
                echo '
                <div class="carousel-item ' . $active_class . '">
                    <img src="' . $ruta . $imges_name[$i] . '" class="d-block w-100" alt="' . $alt[$i] . '">
                </div>';
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#laredoGallery" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#laredoGallery" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

<?php /*
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

</section> */
?>