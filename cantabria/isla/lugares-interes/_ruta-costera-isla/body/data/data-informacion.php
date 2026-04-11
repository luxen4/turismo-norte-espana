<?php 
$header = [
  "titulo" => "🏖️ Playa de Cuberris en Ajo",
  "descripcion" => "Playa tranquila y familiar rodeada de acantilados en la costa de Cantabria"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Playa de Cuberris</strong> es una de las más conocidas de Ajo, un arenal amplio y familiar rodeado de acantilados y naturaleza.",
    "Gracias a su orientación, es una playa muy popular para la práctica de surf y deportes acuáticos durante todo el año.",
    "Cuenta con accesos cómodos y algunos servicios básicos en temporada alta, lo que la convierte en una opción ideal para disfrutar en familia.",
    "El entorno natural y las vistas panorámicas del Cantábrico la convierten en un lugar perfecto para pasear y desconectar."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-de-cuberris-ajo-cantabria-1.jpg",
      "alt" => "Vista panorámica de la Playa de Cuberris en Ajo"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/surf-playa-de-cuberris-ajo.jpg",
      "alt" => "Surfistas en la Playa de Cuberris"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/XQHVzSB2XX8", // reemplaza con el ID real
    "titulo" => "Video de la Playa de Cuberris"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://turismodecantabria.com/wp-content/uploads/2023/05/4aa6cf86-8eb2-abc5-4951-f362c93ae072.jpg",
        "alt" => "Playa de Cuberris con su arena y entorno natural",
        "caption" => "Playa de Cuberris con su arena y entorno natural",
        "fuente" => "https://turismodecantabria.com/playas/playa-de-ajo-o-cuberris/#",
        "fuente_texto" => "turismodecantabria.com"
    ],
    [
        "src" => "https://turismodecantabria.com/wp-content/uploads/2023/05/f8d29720-527f-072b-000c-8e7db0848388-400x300.jpg",
        "alt" => "Formaciones rocosas en la Playa de Cuberris",
        "caption" => "Rocas en Playa de Cuberris",
        "fuente" => "https://turismodecantabria.com/playas/playa-de-ajo-o-cuberris/",
        "fuente_texto" => "turismodecantabria.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/pozas-playa-cuberris-ajo-cantabria.jpg",
        "alt" => "Pozas de marea en la Playa de Cuberris",
        "caption" => "Exploración de fauna en las pozas de marea",
        "fuente" => "https://www.minube.com.ar/rincon/playa-de-cuberris--a2175849",
        "fuente_texto" => "minube.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/vista-aerea-play-de-cuberris-ajo-cantabria.jpg",
        "alt" => "Vista aérea de la Playa de Cuberris",
        "caption" => "Panorámica de la playa y sus acantilados",
        "fuente" => "https://www.skalatopi.com/2020/09/boulder-punky-party-en-playa-cuberris.html",
        "fuente_texto" => "skalatopi.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Cuberris",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Ajo - Cantabria"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "Aprox. 800 metros de playa"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Entorno",
      "descripcion" => "Playa tranquila rodeada de acantilados y vegetación costera"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Surf, pozas de marea, acantilados y atardeceres"
    ],
    [
      "icono" => "🅿️",
      "titulo" => "Servicios",
      "descripcion" => "Acceso directo desde la carretera, duchas, aparcamiento y chiringuito en verano"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏄‍♂️ Actividades en la Playa de Cuberris",
  "items"  => [
    [ "icono" => "🏄‍♀️", "texto" => "Surf y deportes acuáticos" ],
    [ "icono" => "🌅", "texto" => "Disfrutar del atardecer sobre el mar Cantábrico" ],
    [ "icono" => "👨‍👩‍👧", "texto" => "Día de playa en familia con servicios básicos" ],
    [ "icono" => "📸", "texto" => "Fotografía de naturaleza y paisajes costeros" ]
  ]
];
?>

<?php
// Configuración del mapa de la Playa de Cuberris en Ajo
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-cuberris-ajo",
    "centro" => [43.4925, -3.6150],   // Latitud, Longitud aproximadas de la playa
    "zoom"   => 13.4,
    "marker" => [
        "coords" => [43.4928, -3.6153],  // Latitud, Longitud del marcador
        "popup"  => "<strong>Playa de Cuberris</strong>"
    ]
];
?>


<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 65 51 00",
    "enlace" => "tel:+34942655100"
  ],
  "web"      => [
    "texto" => "www.aytobareyo.org",
    "url"   => "https://www.aytobareyo.org"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Lucía M.",
        "texto"  => "Playa muy tranquila y con buen ambiente familiar."
    ],
    [
        "nombre" => "Pedro S.",
        "texto"  => "Un sitio genial para surfear y pasar el día."
    ],
    [
        "nombre" => "Ana R.",
        "texto"  => "Accesible y con chiringuito en verano, nos encantó."
    ],
    [
        "nombre" => "Raúl G.",
        "texto"  => "Un rincón perfecto para ver la puesta de sol en Ajo."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4900&lon=-3.6000&zoom=10"; 
?>
