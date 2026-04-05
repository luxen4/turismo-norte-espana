<?php // Carrusel de 3 Imágenes //
        LUGAR = 'playademuskiz';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2026/bloques/' . LUGAR . '/img';
        $imges_name = ['/vista-panoramica-de-la-playa-de-muskiz-con-su-arena-dorada_1.jfif', '/vista-panoramica-de-la-playa-de-muskiz-con-su-arena-dorada_2.jfif', '/vista-panoramica-de-la-playa-de-muskiz-con-su-arena-dorada-3.jfif'];
        $alt = ["Vista panorámica de la Playa de Muskiz con su arena dorada", "Vista panorámica de la Playa de Muskiz con su arena dorada", "Vista panorámica de la Playa de Muskiz con su arena dorada"];
        require './../../../../../bloques/estructura/carruseles/carruselimagenes/carruselgenerico.php'; ?>

        <?php // Galeria 3 imagenes //
        LUGAR = 'playademuskiz';
        $ruta = 'http://' . $_SERVER['SERVER_NAME'] . '/Blog_Playas2026/bloques/' . LUGAR . '/img';
        $imges_name = ['/vista-panoramica-de-la-playa-de-muskiz-con-su-arena-dorada4.jfif', '/fronton-cercano-playa-de-muskiz.jfif', '/bar-cafeteria-en-la-playa-de-muskiz.jfif'];
        $alt = ["Vista panorámica de la Playa de Muskiz con su arena dorada", "Un frontón cercano a la Playa de Muskiz", "Bar-Cafetería en la Playa de Muskiz"];
        require './../../../../../bloques/estructura/galeriasimagenes/galeriagenerica.php'; ?>


<?php 
/*
Imagen Principal:
Alt: "Vista panorámica de la Playa de Muskiz con su arena dorada y aguas tranquilas."
Imagen de Surf:
Alt: "Surfista cabalgando una ola en la Playa de Muskiz bajo un cielo despejado."
Imagen del Entorno Natural:
Alt: "Entorno natural verde rodeando la Playa de Muskiz, ideal para el senderismo."
Imagen del Atardecer:
Alt: "Impresionante atardecer en la Playa de Muskiz, con el sol ocultándose tras el horizonte."
Imagen de Actividades en Familia:
Alt: "Familia disfrutando de un día soleado en la Playa de Muskiz, construyendo castillos de arena."
Imagen de las Instalaciones:
Alt: "Área de servicios en la Playa de Muskiz, con duchas y zona de picnic."
Imagen del Paseo Marítimo:
Alt: "Paseo marítimo en la Playa de Muskiz, perfecto para caminatas relajantes junto al mar."
Imagen de la Flora:
Alt: "Vegetación autóctona cerca de la Playa de Muskiz, mostrando la diversidad natural de la zona."

Imagen de Deportes Acuáticos:

Alt: "Grupo de personas practicando paddle surf en las aguas tranquilas de la Playa de Muskiz."
Imagen de la Fauna:

Alt: "Gaviotas volando sobre la Playa de Muskiz con el mar de fondo."
Imagen de Picnic en la Playa:

Alt: "Familia disfrutando de un picnic en la Playa de Muskiz, rodeada de naturaleza."
Imagen de Seguridad:

Alt: "Torre de vigilancia y socorristas en la Playa de Muskiz, asegurando un ambiente seguro para los visitantes."
Imagen del Estuario:

Alt: "Vista del estuario que desemboca en la Playa de Muskiz, con aguas serenas y paisaje verde."
Imagen de la Zona de Juegos:

Alt: "Área de juegos infantiles cerca de la Playa de Muskiz, con niños divirtiéndose."
Imagen de la Playa en Invierno:

Alt: "Playa de Muskiz en invierno, con un ambiente tranquilo y solitario bajo un cielo nublado."
Imagen de la Accesibilidad:

Alt: "Rampa de acceso para personas con movilidad reducida en la Playa de Muskiz, garantizando la inclusividad."
Imagen de Eventos Culturales:

Alt: "Escenario montado para un evento cultural en la Playa de Muskiz, con el mar como fondo."
Imagen de la Bahía:

Alt: "Bahía de Muskiz vista desde la playa, con barcos pequeños y montañas en la distancia."

*/
?>


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
