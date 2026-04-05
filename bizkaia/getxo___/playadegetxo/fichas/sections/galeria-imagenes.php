
<section id="galeria" class="container my-5">
<h2>Galería de Imágenes</h2>
    <div class="gallery">
        <img src="https://example.com/path/to/getxo-image1.jpg" alt="Vista panorámica de la Playa de Getxo">
        <img src="https://example.com/path/to/getxo-image2.jpg" alt="Atardecer en Getxo">
        <img src="https://example.com/path/to/getxo-image3.jpg" alt="Surfistas en la playa de Getxo">
        <img src="https://example.com/path/to/getxo-image4.jpg" alt="Paseo marítimo de Getxo">
        <img src="https://example.com/path/to/getxo-image5.jpg" alt="Acantilados cercanos a la playa de Getxo">
        <img src="https://example.com/path/to/getxo-image6.jpg" alt="Puerto deportivo de Getxo">
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
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2026/bloques/' . LUGAR . '/img';
$imges_name = ['/atardecerzarautzsurfistas.jpg', '/playadezarautzdiasoleado.jpg', '/paseomaritimozarautz.jpg'];
$alt = ["Vista panorámica de la Playa de Zarautz al atardecer, con surfistas disfrutando de las olas.", "Playa de Zarautz en un día soleado, con su extenso paseo marítimo y montañas al fondo.", "Paseo marítimo de Zarautz con palmeras y restaurantes, ideal para caminar y disfrutar del mar."];
require './../../../../../bloques/estructura/carruseles/carruselimagenes/carruselgenerico.php'; ?>

<?php // Galeria 3 imagenes //
LUGAR = 'playadezarautz';
$ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2026/bloques/' . LUGAR . '/img';
$imges_name = ['/amanecerplayazarautz.jpg', '/surfistasaliendoplayazarautz.png', '/familiasenlaplayadezarautz.jpg'];
$alt = ["Amanecer en la Playa de Zarautz", "Surfista saliendo del agua en la Playa de Zarautz, con el mar en el fondo.", "Familias disfrutando de un día de playa en Zarautz, con sombrillas y castillos de arena."];
require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; */ ?>