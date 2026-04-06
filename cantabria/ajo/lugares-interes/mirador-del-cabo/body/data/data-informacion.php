<?php 
$header = [
  "titulo" => "🌄 Mirador del Cabo en Ajo",
  "descripcion" => "Espectacular mirador junto al faro con vistas al mar Cantábrico y a la costa de Cantabria"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Mirador del Cabo</strong> en Ajo es uno de los puntos más impresionantes de la costa cántabra, situado junto al famoso faro de Ajo.",
    "Desde este mirador se obtienen vistas panorámicas del mar Cantábrico, los acantilados y la costa salvaje que caracteriza esta zona del municipio de Bareyo.",
    "Es un lugar ideal para disfrutar del atardecer, sentir la brisa marina y contemplar la fuerza del mar rompiendo contra las rocas.",
    "Además, el entorno ha sido recientemente acondicionado, convirtiéndose en un espacio accesible y perfecto para paseos tranquilos y fotografía."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cabo-ajo-cantabria-1.jpg",
      "alt" => "Vista del Mirador del Cabo en Ajo"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-cabo-ajo-cantabria.jpg",
      "alt" => "Acantilados junto al Mirador del Cabo en Ajo"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/6n6lR0vPqvU",
      "titulo" => "Video del Mirador del Cabo en Ajo"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/faro-ajo-colores-cantabria.jpg",
        "alt" => "Faro de Ajo decorado",
        "caption" => "Faro de Ajo junto al mirador",
        "fuente" => "https://turismodecantabria.com",
        "fuente_texto" => "turismodecantabria.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mirador-cabo-ajo-vistas-mar.jpg",
        "alt" => "Vistas al mar Cantábrico",
        "caption" => "Vistas panorámicas desde el mirador",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-cabo-ajo.jpg",
        "alt" => "Acantilados en Ajo",
        "caption" => "Acantilados y costa salvaje",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/atardecer-cabo-ajo.jpg",
        "alt" => "Atardecer en el Mirador del Cabo",
        "caption" => "Atardecer espectacular en la costa",
        "fuente" => "",
        "fuente_texto" => ""
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Mirador del Cabo",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Ajo (Bareyo), Cantabria"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Tipo",
      "descripcion" => "Mirador costero junto a acantilados"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Entorno",
      "descripcion" => "Acantilados, mar abierto y paisaje natural protegido"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Faro de Ajo, vistas panorámicas, atardeceres y costa salvaje"
    ],
    [
      "icono" => "🅿️",
      "titulo" => "Servicios",
      "descripcion" => "Aparcamiento cercano y acceso sencillo a pie"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌄 Actividades en el Mirador del Cabo",
  "items"  => [
    [ "icono" => "📸", "texto" => "Fotografía de paisajes y acantilados" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de atardeceres únicos sobre el Cantábrico" ],
    [ "icono" => "🚶‍♂️", "texto" => "Paseos tranquilos por la zona del faro" ],
    [ "icono" => "🌊", "texto" => "Observación del mar y de las olas rompiendo en la costa" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-mirador-cabo-ajo",
    "centro" => [43.4980, -3.6205],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4990, -3.6208],
        "popup"  => "<strong>Mirador del Cabo</strong>"
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
        "nombre" => "Laura G.",
        "texto"  => "Las vistas son impresionantes, uno de los mejores miradores de Cantabria."
    ],
    [
        "nombre" => "Javier M.",
        "texto"  => "Perfecto para ver el atardecer, muy recomendable."
    ],
    [
        "nombre" => "Sara T.",
        "texto"  => "El faro y los acantilados crean un paisaje espectacular."
    ],
    [
        "nombre" => "Miguel A.",
        "texto"  => "Acceso fácil y vistas increíbles, parada obligatoria en Ajo."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>