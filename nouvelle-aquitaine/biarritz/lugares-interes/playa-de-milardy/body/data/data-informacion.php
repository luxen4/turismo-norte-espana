<?php 
$header = [
  "titulo" => "🏖️ Playa de la Milady en Biarritz",
  "descripcion" => "Amplia playa familiar y deportiva en Biarritz, perfecta para surf, paseos y disfrutar del Atlántico"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de la Milady</strong> es una de las playas más amplias y tranquilas de Biarritz.",
    "Situada en el extremo sur de la ciudad, destaca por su ambiente familiar y sus zonas verdes cercanas.",
    "Es muy popular entre surfistas, deportistas y personas que buscan un entorno más relajado que la Grande Plage.",
    "Además, cuenta con acceso cómodo, paseo marítimo y vistas abiertas al océano Atlántico."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/placeholder_milady.jpg",
      "alt" => "Playa de la Milady en Biarritz",
      "caption" => "Playa de la Milady",
      "fuente" => "https://fr.wikipedia.org/wiki/Biarritz",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://www.biarritz.fr/fileadmin/_processed_/placeholder_milady_01.jpg",
      "alt" => "Vista de la playa con zonas verdes",
      "caption" => "Zona natural de la Milady",
      "fuente" => "https://www.biarritz.fr",
      "fuente_texto" => "biarritz.fr"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/placeholder_milady",
    "titulo" => "Video de la Playa de la Milady"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/placeholder_milady_2.jpg",
        "alt" => "Olas en la Playa de la Milady",
        "caption" => "Olas en la Milady",
        "fuente" => "https://wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://www.france-voyage.com/visuals/photos/placeholder_milady.webp",
        "alt" => "Atardecer en la playa",
        "caption" => "Atardecer en la Milady",
        "fuente" => "https://www.france-voyage.com",
        "fuente_texto" => "france-voyage.com"
    ],
    [
        "src" => "https://www.guide-du-paysbasque.com/_bibli_rubriques/placeholder_milady.jpg",
        "alt" => "Playa amplia de arena",
        "caption" => "Arena y espacio abierto",
        "fuente" => "https://guide-du-paysbasque.com",
        "fuente_texto" => "guide-du-paysbasque.com"
    ],
    [
        "src" => "https://media.routard.com/image/placeholder_milady.jpg",
        "alt" => "Vista panorámica de la Milady",
        "caption" => "Vista panorámica",
        "fuente" => "https://www.routard.com",
        "fuente_texto" => "routard.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de la Milady",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Sur de Biarritz, País Vasco francés"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Amplia playa de arena con zonas naturales"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Oleaje",
      "descripcion" => "Moderado a fuerte, apto para surf"
    ],
    [
      "icono" => "🏃‍♂️",
      "titulo" => "Ambiente",
      "descripcion" => "Familiar, deportivo y más tranquilo que el centro"
    ],
    [
      "icono" => "🚿",
      "titulo" => "Servicios",
      "descripcion" => "Aparcamiento, duchas, paseos, parques y restaurantes cercanos"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏄‍♂️ Qué hacer en la Playa de la Milady",
  "items"  => [
    [ "icono" => "🏄‍♂️", "texto" => "Practicar surf en sus olas abiertas" ],
    [ "icono" => "🚶‍♂️", "texto" => "Pasear por el paseo marítimo" ],
    [ "icono" => "🌳", "texto" => "Disfrutar de zonas verdes y parques cercanos" ],
    [ "icono" => "🌅", "texto" => "Ver el atardecer sobre el Atlántico" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-milady-biarritz",
    "centro" => [43.4686, -1.5760],
    "zoom"   => 15,
    "marker" => [
        "coords" => [43.4686, -1.5760],
        "popup"  => "<strong>Playa de la Milady</strong>"
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
        "nombre" => "María L.",
        "texto"  => "Muy tranquila y perfecta para familias."
    ],
    [
        "nombre" => "Jon B.",
        "texto"  => "Ideal para surf sin tanta gente."
    ],
    [
        "nombre" => "Claire P.",
        "texto"  => "Me encantan sus zonas verdes."
    ],
    [
        "nombre" => "David S.",
        "texto"  => "Una playa más relajada que el centro."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.4686&lon=-1.5760&zoom=10"; 
?>