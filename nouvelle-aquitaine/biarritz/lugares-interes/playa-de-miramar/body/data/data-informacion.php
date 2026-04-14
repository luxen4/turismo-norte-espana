<?php 
$header = [
  "titulo" => "🏖️ Playa de Miramar en Biarritz",
  "descripcion" => "Pequeña y tranquila playa urbana de Biarritz, ideal para relajarse y disfrutar del Atlántico"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de Miramar</strong> es una de las playas más pequeñas y tranquilas de Biarritz.",
    "Se encuentra muy cerca del centro urbano, entre la Grande Plage y la costa norte de la ciudad.",
    "Es muy apreciada por su ambiente relajado, ideal para familias y paseos junto al mar.",
    "Durante la pleamar, el oleaje puede ser fuerte, ofreciendo un paisaje espectacular del Atlántico."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/placeholder_miramar_biarritz.jpg",
      "alt" => "Playa de Miramar en Biarritz",
      "caption" => "Playa de Miramar",
      "fuente" => "https://fr.wikipedia.org/wiki/Biarritz",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://www.biarritz.fr/fileadmin/_processed_/placeholder_miramar_01.jpg",
      "alt" => "Vista de la playa con el océano",
      "caption" => "Miramar y el Atlántico",
      "fuente" => "https://www.biarritz.fr",
      "fuente_texto" => "biarritz.fr"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/placeholder_miramar",
    "titulo" => "Video de la Playa de Miramar"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/placeholder_miramar_2.jpg",
        "alt" => "Olas en Miramar",
        "caption" => "Olas en la Playa de Miramar",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/placeholder_miramar.webp",
        "alt" => "Atardecer en Miramar",
        "caption" => "Atardecer en la playa",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ],
    [
        "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/placeholder_miramar.jpg",
        "alt" => "Vista panorámica de la playa",
        "caption" => "Vista panorámica de Miramar",
        "fuente" => "https://guide-du-paysbasque.com",
        "fuente_texto" => "guide-du-paysbasque.com"
    ],
    [
        "src" => "https://media.routard.com/image/placeholder_miramar.jpg",
        "alt" => "Playa tranquila de Miramar",
        "caption" => "Ambiente tranquilo",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Miramar",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Centro de Biarritz, País Vasco francés"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Pequeña playa urbana de arena"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Oleaje",
      "descripcion" => "Fuerte en pleamar, más tranquila en bajamar"
    ],
    [
      "icono" => "🏄‍♂️",
      "titulo" => "Ambiente",
      "descripcion" => "Tranquilo, familiar y menos concurrido"
    ],
    [
      "icono" => "🚿",
      "titulo" => "Servicios",
      "descripcion" => "Acceso urbano, duchas y cercanía a hoteles"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🌅 Qué hacer en la Playa de Miramar",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Pasear junto al mar" ],
    [ "icono" => "🌅", "texto" => "Ver el atardecer sobre el Atlántico" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes costeros" ],
    [ "icono" => "🌊", "texto" => "Disfrutar del sonido del mar" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-miramar-biarritz",
    "centro" => [43.4855, -1.5635],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4855, -1.5635],
        "popup"  => "<strong>Playa de Miramar</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 22 37 10",
    "enlace" => "tel:+33559223710"
  ],
  "web"      => [
    "texto" => "www.biarritz.fr",
    "url"   => "https://www.biarritz.fr"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Sophie L.",
        "texto"  => "Muy tranquila, perfecta para relajarse."
    ],
    [
        "nombre" => "Marc D.",
        "texto"  => "Un rincón pequeño pero precioso."
    ],
    [
        "nombre" => "Ana P.",
        "texto"  => "Ideal para desconectar del turismo masivo."
    ],
    [
        "nombre" => "Lucas R.",
        "texto"  => "Me encanta su ambiente calmado."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4855&lon=-1.5635&zoom=10"; 
?>