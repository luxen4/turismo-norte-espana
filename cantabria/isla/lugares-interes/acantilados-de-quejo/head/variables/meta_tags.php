<?php 
$header = [
  "titulo" => "🌊 Acantilados de Quejo en Isla",
  "descripcion" => "Espectaculares acantilados con vistas al mar Cantábrico en la costa de Cantabria"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "Los <strong>Acantilados de Quejo</strong> son uno de los paisajes más impresionantes de la localidad de Isla, en Cantabria. Este entorno natural destaca por sus formaciones rocosas y sus vistas abiertas al mar Cantábrico.",
    "Se trata de una zona ideal para pasear junto al mar, disfrutar de la brisa marina y contemplar la fuerza del océano rompiendo contra las rocas.",
    "Los senderos que recorren la costa permiten descubrir rincones únicos, perfectos para la fotografía y la observación del paisaje.",
    "Un lugar perfecto para quienes buscan naturaleza, tranquilidad y vistas espectaculares en la costa norte de España."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/acantilados-de-quejo-isla-cantabria-1.jpg",
      "alt" => "Vista de los Acantilados de Quejo en Isla"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/costa-acantilados-quejo-isla.jpg",
      "alt" => "Costa rocosa de los Acantilados de Quejo"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/Scxs7L0vhZ4",
      "titulo" => "Video de los Acantilados de Quejo"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/vista-panoramica-acantilados-quejo.jpg",
        "alt" => "Vista panorámica de los Acantilados de Quejo",
        "caption" => "Impresionantes vistas del litoral cántabro",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/olas-rompiendo-acantilados-quejo.jpg",
        "alt" => "Olas rompiendo en los acantilados",
        "caption" => "El mar Cantábrico golpeando la costa",
        "fuente" => "",
        "fuente_texto" => ""
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/sendero-costero-quejo.jpg",
        "alt" => "Sendero junto a los acantilados",
        "caption" => "Ruta costera ideal para paseos",
        "fuente" => "",
        "fuente_texto" => ""
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
      "descripcion" => "Isla (Arnuero), Cantabria"
    ],
    [
      "icono" => "⛰️",
      "titulo" => "Entorno",
      "descripcion" => "Acantilados naturales con vistas abiertas al mar Cantábrico"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Vistas panorámicas, rutas costeras y paisajes naturales"
    ],
    [
      "icono" => "🥾",
      "titulo" => "Acceso",
      "descripcion" => "Senderos peatonales a lo largo de la costa"
    ],
    [
      "icono" => "📸",
      "titulo" => "Ideal para",
      "descripcion" => "Fotografía, paseos y observación del mar"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌿 Actividades en los Acantilados de Quejo",
  "items"  => [
    [ "icono" => "🥾", "texto" => "Senderismo por rutas costeras" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes y acantilados" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de atardeceres junto al mar" ],
    [ "icono" => "🌊", "texto" => "Observación del oleaje del Cantábrico" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-acantilados-quejo-isla",
    "centro" => [43.4985, -3.5670],
    "zoom"   => 13.5,
    "marker" => [
        "coords" => [43.4995, -3.5675],
        "popup"  => "<strong>Acantilados de Quejo</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+34 942 67 91 00",
    "enlace" => "tel:+34942679100"
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
        "nombre" => "Laura G.",
        "texto"  => "Un lugar espectacular para pasear junto al mar."
    ],
    [
        "nombre" => "Miguel A.",
        "texto"  => "Las vistas desde los acantilados son impresionantes."
    ],
    [
        "nombre" => "Sara P.",
        "texto"  => "Perfecto para desconectar y disfrutar de la naturaleza."
    ],
    [
        "nombre" => "Javier R.",
        "texto"  => "Ideal para hacer fotos y ver el atardecer."
    ]
];
?>
<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>