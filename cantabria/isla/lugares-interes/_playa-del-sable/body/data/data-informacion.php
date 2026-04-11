<?php 
$header = [
  "titulo" => "🌊 Acantilados del Cabo de Ajo",
  "descripcion" => "Impresionante recorrido junto a los acantilados y el Faro del Cabo de Ajo, en Cantabria"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "Los <strong>Acantilados del Cabo de Ajo</strong> ofrecen un paisaje impresionante sobre el mar Cantábrico, con acantilados escarpados y zonas de observación de aves marinas.",
    "Es un recorrido ideal para caminantes y fotógrafos, con senderos que permiten contemplar el Faro del Cabo de Ajo y disfrutar de panorámicas únicas.",
    "El lugar es perfecto para admirar puestas de sol sobre los acantilados y la costa cantábrica, un paraíso para la fotografía de naturaleza.",
    "Accesible para familias y paseos tranquilos, con senderos bien señalizados y zonas seguras cerca del mar."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mapa-acantilados-cabo-ajo.png",
      "alt" => "Vista panorámica de los acantilados del Cabo de Ajo"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-cabo-ajo-2.jpg",
      "alt" => "Sendero junto a los acantilados del Cabo de Ajo"
    ]
  ]
];
?>


<?php
$info = [
  "titulo" => "ℹ️ Información de la Ruta",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Acantilados del Cabo de Ajo, Bareyo - Cantabria"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "Aprox. 5 km (ida y vuelta, senderos costeros)"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Dificultad",
      "descripcion" => "Baja - Moderada, accesible para la mayoría"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Acantilados, Faro del Cabo de Ajo, miradores naturales y aves marinas"
    ]
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-cabo-ajo-1.jpg",
        "alt" => "Vista panorámica de los acantilados del Cabo de Ajo",
        "caption" => "Acantilados del Cabo de Ajo",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/panoramica-acantilado-cabo-de-ajo.png",
        "alt" => "Vista panorámica de los acantilados del Cabo de Ajo",
        "caption" => "Acantilados del Cabo de Ajo",
        "fuente" => "https://eltomavistasdesantander.com/2018/08/22/asi-esculpe-la-mar-la-costa-del-cabo-de-ajo/",
        "fuente_texto" => "Video -> eltomavistasdesantander.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-cabo-de-ajo.jpg",
        "alt" => "Sendero junto a los acantilados del Cabo de Ajo",
        "caption" => "Sendero en los acantilados",
        "fuente" => "https://es.wikiloc.com/rutas-senderismo/cueva-de-la-ojerada-faro-de-ajo-cantabria-108547519",
        "fuente_texto" => "es.wikiloc.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/faro-cabo-ajo-visto-desde-sendero.jpg",
        "alt" => "Faro del Cabo de Ajo visto desde el sendero",
        "caption" => "Faro del Cabo de Ajo",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏞️ Actividades en los Acantilados del Cabo de Ajo",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Senderismo y paseos junto a los acantilados" ],
    [ "icono" => "📸", "texto" => "Fotografía panorámica de los acantilados y la costa cantábrica" ],
    [ "icono" => "🦅", "texto" => "Observación de aves marinas en su hábitat natural" ],
    [ "icono" => "🌅", "texto" => "Disfrutar del atardecer sobre el Cabo de Ajo" ]
  ]
];
?>


<?php
// Configuración del mapa de los Acantilados del Cabo de Ajo
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-acantilados-cabo-ajo",
    "centro" => [43.495500, -3.597600],   // Latitud, Longitud del centro del mapa
    "zoom"   => 13,
    "marker" => [
        "coords" => [43.496500, -3.597600],  // Latitud, Longitud del marcador
        "popup"  => "<strong>Acantilados del Cabo de Ajo</strong>"
    ]
];
?>



<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 65 51 00",
    "enlace" => "tel:+34942655100" // Oficina de Turismo de Bareyo / Cabo de Ajo
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
        "nombre" => "Ana L.",
        "texto"  => "Una ruta espectacular, sin duda lo mejor de Ajo."
    ],
    [
        "nombre" => "Diego P.",
        "texto"  => "Ideal para senderismo, las vistas son brutales."
    ],
    [
        "nombre" => "Sofía M.",
        "texto"  => "Los acantilados de Cabo de Ajo son impresionantes, me dejaron sin palabras."
    ],
    [
        "nombre" => "Tomás G.",
        "texto"  => "Un lugar mágico para disfrutar del atardecer, totalmente recomendable."
    ]
];
?>

<?php // $iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; ?>
