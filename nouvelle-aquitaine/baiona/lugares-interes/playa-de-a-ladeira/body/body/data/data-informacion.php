<?php 
$header = [
  "titulo" => "🏖️ Playa de A Ladeira en Baiona",
  "descripcion" => "Amplia playa de arena fina en Baiona, ideal para familias, paseos y vistas a la bahía"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Playa de A Ladeira</strong> es uno de los arenales más conocidos de Baiona, situada junto a la bahía y protegida de las corrientes del Atlántico.",
    "Su gran extensión de arena fina y aguas tranquilas la convierten en una playa ideal para familias y baños relajados.",
    "Desde la playa se disfrutan vistas espectaculares de la bahía de Baiona y del Monte Boi, donde se encuentra la histórica fortaleza de Monterreal.",
    "Es también un lugar perfecto para pasear al atardecer y disfrutar de un entorno natural muy accesible y bien conservado."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/playa-a-ladeira-baiona-1.jpg",
      "alt" => "Vista general de la Playa de A Ladeira en Baiona"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/arena-playa-a-ladeira-baiona.jpg",
      "alt" => "Arena fina de la Playa de A Ladeira"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/placeholder_ladeira",
      "titulo" => "Video de la Playa de A Ladeira"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/bahia-baiona-playa-a-ladeira.jpg",
        "alt" => "Bahía de Baiona desde A Ladeira",
        "caption" => "Vistas a la bahía de Baiona",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/paseo-playa-a-ladeira-baiona.jpg",
        "alt" => "Paseo junto a la playa",
        "caption" => "Zona de paseo junto a la playa",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/atardecer-a-ladeira-baiona.jpg",
        "alt" => "Atardecer en A Ladeira",
        "caption" => "Atardecer en la playa",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/monte-boi-desde-playa-a-ladeira.jpg",
        "alt" => "Monte Boi desde A Ladeira",
        "caption" => "Vistas al Monte Boi y Monterreal",
        "fuente" => "",
        "fuente_texto" => ".com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de A Ladeira",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Baiona, Pontevedra (Galicia, España)"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Playa urbana de arena fina y aguas tranquilas"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Mar",
      "descripcion" => "Aguas calmadas protegidas por la bahía"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Ideal para familias, paseos y vistas panorámicas"
    ],
    [
      "icono" => "🅿️",
      "titulo" => "Acceso",
      "descripcion" => "Fácil acceso a pie y zonas cercanas de aparcamiento"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏖️ Actividades en la Playa de A Ladeira",
  "items"  => [
    [ "icono" => "🏊‍♂️", "texto" => "Baño tranquilo en aguas protegidas" ],
    [ "icono" => "🚶‍♀️", "texto" => "Paseos por la orilla de la bahía" ],
    [ "icono" => "📸", "texto" => "Fotografía del paisaje y Monte Boi" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de los atardeceres sobre la bahía" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-a-ladeira-baiona",
    "centro" => [42.1205, -8.8505],
    "zoom"   => 14,
    "marker" => [
        "coords" => [42.1205, -8.8505],
        "popup"  => "<strong>Playa de A Ladeira</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+34 986 35 50 00",
    "enlace" => "tel:+34986355000"
  ],
  "web"      => [
    "texto" => "www.turismo.baiona.gal",
    "url"   => "https://www.turismo.baiona.gal"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "María L.",
        "texto"  => "Una playa perfecta para ir con niños, muy tranquila."
    ],
    [
        "nombre" => "Jorge P.",
        "texto"  => "Vistas increíbles a la bahía, especialmente al atardecer."
    ],
    [
        "nombre" => "Ana S.",
        "texto"  => "Muy limpia y fácil de acceder, ideal para pasear."
    ],
    [
        "nombre" => "Roberto G.",
        "texto"  => "Un lugar muy agradable para relajarse sin agobios."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>