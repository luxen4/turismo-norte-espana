<?php 
$header = [
  "titulo" => "🌊 Acantilados de Quejo en Isla",
  "descripcion" => "Impresionantes acantilados costeros con vistas al mar Cantábrico en la zona de Isla, Cantabria"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "Los <strong>Acantilados de Quejo</strong>, situados en la localidad de Isla (municipio de Arnuero), ofrecen un paisaje costero espectacular con vistas abiertas al mar Cantábrico.",
    "Se trata de una zona natural de gran belleza, donde el mar ha modelado la costa formando acantilados y pequeñas calas de gran valor paisajístico.",
    "Es un lugar ideal para pasear, disfrutar del aire marino y contemplar el oleaje rompiendo contra las rocas.",
    "Un entorno perfecto para la fotografía, la observación del mar y la desconexión en plena naturaleza."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-quejo-isla-cantabria-1.jpg",
      "alt" => "Vista de los Acantilados de Quejo en Isla"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/costa-rocas-acantilados-quejo-isla-cantabria.jpg",
      "alt" => "Costa rocosa en los Acantilados de Quejo"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/XXXXXXXXXXX",
      "titulo" => "Video de los Acantilados de Quejo"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/atardecer-acantilados-quejo-isla-cantabria.jpg",
        "alt" => "Atardecer en los Acantilados de Quejo",
        "caption" => "Atardecer sobre los acantilados",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/olas-acantilados-quejo-isla-cantabria.jpg",
        "alt" => "Olas golpeando los Acantilados de Quejo",
        "caption" => "El mar Cantábrico en estado puro",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-acantilados-quejo-isla-cantabria.jpg",
        "alt" => "Sendero junto a los Acantilados de Quejo",
        "caption" => "Rutas para caminar junto al mar",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/vista-aerea-acantilados-quejo-isla-cantabria.jpg",
        "alt" => "Vista aérea de los Acantilados de Quejo",
        "caption" => "Panorámica de la costa de Isla",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de los Acantilados de Quejo",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Isla, Arnuero - Cantabria"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Tipo de entorno",
      "descripcion" => "Acantilados costeros con vistas al Cantábrico"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Paisaje",
      "descripcion" => "Costa rocosa con fuerte oleaje y gran valor natural"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Miradores naturales, fotografía, senderismo costero"
    ],
    [
      "icono" => "🚶",
      "titulo" => "Acceso",
      "descripcion" => "Fácil acceso a pie desde la zona de Quejo e Isla"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌄 Actividades en los Acantilados de Quejo",
  "items"  => [
    [ "icono" => "📸", "texto" => "Fotografía de paisajes y atardeceres" ],
    [ "icono" => "🚶", "texto" => "Senderismo por la costa y miradores naturales" ],
    [ "icono" => "🌊", "texto" => "Observación del oleaje y la fuerza del mar Cantábrico" ],
    [ "icono" => "🧘", "texto" => "Relax y desconexión en un entorno natural" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-acantilados-quejo-isla",
    "centro" => [43.4715, -3.5330],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.4720, -3.5325],
        "popup"  => "<strong>Acantilados de Quejo</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 67 00 01",
    "enlace" => "tel:+34942670001"
  ],
  "web"      => [
    "texto" => "www.aytoarnuero.org",
    "url"   => "https://www.aytoarnuero.org"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Laura M.",
        "texto"  => "Un lugar impresionante para ver el mar en estado salvaje."
    ],
    [
        "nombre" => "Javier T.",
        "texto"  => "Perfecto para caminar y desconectar, vistas increíbles."
    ],
    [
        "nombre" => "Sara G.",
        "texto"  => "Muy recomendable al atardecer, la luz es espectacular."
    ],
    [
        "nombre" => "Álvaro D.",
        "texto"  => "Naturaleza pura, acantilados muy fotogénicos."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>