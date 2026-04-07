<section class="gallery">

    <h2>Galería de Imágenes</h2>

    <div class="row">
        <div id="#" class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-12 col-12">
            <img src="./../img/vistapanoramica_playa_de_laga.jpg" alt="Vista panorámica de la Playa de Laga">
        </div>

        <div id="#" class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-12 col-12">
            <img src="./../img/olas_playa_de_laga.jpg" alt="Olas en la Playa de Laga">
        </div>

        <div id="#" class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-12 col-12">
            <img src="./../img/atardecer_playa_de_laga.jpg" alt="Atardecer en la Playa de Laga">
        </div>
    </div>

    <div class="row">
        <div id="#" class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-12 col-12">
            <img src="./../img/arena_dorada_paya_de_laga.png" alt="Arena dorada de la Playa de Laga">
        </div>


        <div id="#" class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-12 col-12">
            <img src="./../img/vista_aerea_playa_de_laga.jpg" alt="Vista aérea de la Playa de Laga">
        </div>

        <div id="#" class="col-xl-4 text-center col-lg-4 col-md-4 col-sm-12 col-12">
            <img src="./../img/laga-surf_playa_de_laga.jpg" alt="Surfistas en la Playa de Laga">
        </div>
    </div>

</section>

<style>
/* Estilos para la galería de imágenes */
.gallery img {
    width: 100%;
    height: auto;
    display: block;
    margin-bottom: 20px;
}

.gallery .row {
    display: flex;
    flex-wrap: wrap;
}

.gallery .col-md-4 {
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    .gallery .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }
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