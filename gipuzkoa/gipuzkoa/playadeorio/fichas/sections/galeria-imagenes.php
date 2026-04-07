<!-- Galería de Imágenes -->
<section id="galeria" class="container my-5">
    <h2 class="mb-4">Galería de Imágenes</h2>
    <div id="orioCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#orioCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#orioCarousel" data-slide-to="1"></li>
            <li data-target="#orioCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./../img/playa-de-orio-al-atardecer.jpg" class="d-block w-100" alt="Playa de Orio al atardecer">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Playa de Orio al atardecer</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./../img/vista-panoramica-de-la-playa-de-orio.png" class="d-block w-100" alt="Vista panorámica de la playa de Orio">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Vista panorámica de la playa de Orio</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="./../img/deportes-acuaticos-en-orio.png" class="d-block w-100" alt="Deportes acuáticos en Orio">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Deportes acuáticos en Orio</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#orioCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#orioCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
    </div>
</section>


<style>
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
    }
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