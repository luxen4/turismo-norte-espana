
    <!-- Galería de Imágenes -->
    <section class="container my-5">
        <h2>Galería de Imágenes</h2>
        <div id="carouselFuenterrabia" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./../img/vista-panoramica-playa-fuenterrabia-bahía.jpg" class="d-block w-100" alt="Vista panorámica de la Playa de Fuenterrabia y la bahía">
                </div>
                <div class="carousel-item">
                    <img src="./../img/barcos-pesca-bahia-fuenterrabia-vistos-desde-playa.png" class="d-block w-100" alt="Barcos de pesca en la bahía de Fuenterrabia vistos desde la playa">
                </div>
                <div class="carousel-item">
                    <img src="./../img/puerto-fuenterrabia.jpg" class="d-block w-100" alt="Puerto de Fuenterrabia">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselFuenterrabia" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselFuenterrabia" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
            </a>
        </div>
    </section>

<?php 
/* 
    alt="Vista panorámica de la Playa de Fuenterrabia y la bahía"
    alt="Surfistas disfrutando de las olas en la Playa de Fuenterrabia"
    alt="Atardecer en la Playa de Fuenterrabia con vistas al Monte Jaizkibel"
    alt="Familias relajándose en la arena de la Playa de Fuenterrabia"
    alt="Chiringuito moderno en la Playa de Fuenterrabia con platos locales"
    alt="Kayaks y paddleboards en la orilla de la Playa de Fuenterrabia"
    alt="Socorristas vigilando la Playa de Fuenterrabia"
    alt="Zona de picnic y descanso en la Playa de Fuenterrabia"
    alt="Paseo marítimo de Fuenterrabia junto a la playa"
    alt="Barcos de pesca en la bahía de Fuenterrabia vistos desde la playa"
*/
?>

<style>
    /*
    #galeria .card-img-top {
    height: 250px;
    object-fit: cover;
}

#galeria .card-body {
    background-color: #f8f9fa;
    border-top: 1px solid #dee2e6;
}

#galeria .card-text {
    color: #333;
    font-size: 1rem;
    font-weight: 500;
}*/
</style>



<?php
/*
    Alt: "Vista panorámica de la Playa de Zarautz al atardecer, con surfistas disfrutando de las olas."
    Alt: "Playa de Zarautz en un día soleado, con su extenso paseo marítimo y montañas al fondo."
    Alt: "Olas rompiendo en la Playa de Zarautz, un lugar popular para el surf en el País Vasco."
    Alt: "Paseo marítimo de Zarautz con palmeras y restaurantes, ideal para caminar y disfrutar del mar."
    Alt: "Surfistas cogiendo olas en la Playa de Zarautz, conocida por sus excelentes condiciones para este deporte."
    Alt: "Arena dorada de la Playa de Zarautz con el mar Cantábrico en el horizonte."
    Alt: "Familias disfrutando de un día de playa en Zarautz, con sombrillas y castillos de arena."
    Alt: "Vista aérea de la Playa de Zarautz, mostrando su extensión y la costa vasca."
    Alt: "Paseo marítimo de Zarautz al amanecer, con la playa y el mar en calma."
    Alt: "Zarautz al atardecer, con colores cálidos reflejándose en el mar desde la playa."
    Alt: "Surfista saliendo del agua en la Playa de Zarautz, con el mar en el fondo."
    Alt: "Playa de Zarautz, famosa por su larga extensión y actividades acuáticas."




<section id="galeria" class="container my-5">

<?php // Carrusel de 3 Imágenes //
LUGAR = 'playadezarautz';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/turismo-norte-espana/bloques/' . LUGAR . '/img';
$imges_name = ['/atardecerzarautzsurfistas.jpg', '/playadezarautzdiasoleado.jpg', '/paseomaritimozarautz.jpg'];
$alt = ["Vista panorámica de la Playa de Zarautz al atardecer, con surfistas disfrutando de las olas.", "Playa de Zarautz en un día soleado, con su extenso paseo marítimo y montañas al fondo.", "Paseo marítimo de Zarautz con palmeras y restaurantes, ideal para caminar y disfrutar del mar."];
require './../../../../../bloques/estructura/carruseles/carruselimagenes/carruselgenerico.php'; ?>

<?php // Galeria 3 imagenes //
LUGAR = 'playadezarautz';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/turismo-norte-espana/bloques/' . LUGAR . '/img';
$imges_name = ['/amanecerplayazarautz.jpg', '/surfistasaliendoplayazarautz.png', '/familiasenlaplayadezarautz.jpg'];
$alt = ["Amanecer en la Playa de Zarautz", "Surfista saliendo del agua en la Playa de Zarautz, con el mar en el fondo.", "Familias disfrutando de un día de playa en Zarautz, con sombrillas y castillos de arena."];
require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; */ ?>