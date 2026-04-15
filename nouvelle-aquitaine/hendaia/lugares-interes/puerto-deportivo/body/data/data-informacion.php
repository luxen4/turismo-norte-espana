<?php 
$header = [
  "titulo" => "⛵ Puerto Deportivo de Hendaia",
  "descripcion" => "Un animado puerto deportivo en la desembocadura del Bidasoa, ideal para paseos, ocio y actividades náuticas"
];
?>

<?php
$intro = [
  "parrafos" => [
    "El <strong>Puerto Deportivo de Hendaia</strong> es uno de los puntos más dinámicos de la localidad, situado junto a la desembocadura del río Bidasoa.",
    "Este moderno puerto acoge numerosas embarcaciones y ofrece un ambiente animado con restaurantes, terrazas y comercios.",
    "Es un lugar ideal para pasear junto al agua, disfrutar del ambiente marítimo y contemplar las vistas hacia Hondarribia.",
    "Además, es punto de partida para actividades náuticas como vela, kayak y excursiones en barco."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/6/6c/Hendaye_port.jpg",
      "alt" => "Puerto deportivo de Hendaia",
      "caption" => "Vista del puerto deportivo",
      "fuente" => "wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/0/0e/Hendaye_marina.jpg",
      "alt" => "Embarcaciones en el puerto de Hendaia",
      "caption" => "Puerto con embarcaciones",
      "fuente" => "wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/Y1NvIarWAn8",
    "titulo" => "Puerto Deportivo de Hendaia"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5e/Hendaye_port_boats.jpg",
      "alt" => "Barcos en el puerto",
      "caption" => "Ambiente náutico en Hendaia",
      "fuente" => "wikipedia.org",
      "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/3/3c/Hendaye_harbor.jpg",
        "alt" => "Vista del puerto y paseo",
        "caption" => "Paseo junto al puerto",
        "fuente" => "wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ],
    [
        "src" => "https://upload.wikimedia.org/wikipedia/commons/9/9e/Hendaye_evening_port.jpg",
        "alt" => "Puerto al atardecer",
        "caption" => "Atardecer en el puerto",
        "fuente" => "wikipedia.org",
        "fuente_texto" => "wikipedia.org"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información sobre el Puerto Deportivo",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Hendaia, junto al río Bidasoa"
    ],
    [
      "icono" => "⛵",
      "titulo" => "Actividad principal",
      "descripcion" => "Puerto deportivo y actividades náuticas"
    ],
    [
      "icono" => "🍽️",
      "titulo" => "Ambiente",
      "descripcion" => "Restaurantes, terrazas y ocio marítimo"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Zona animada con vistas a Hondarribia"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "⛵ Qué hacer en el Puerto Deportivo",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Pasear junto al puerto" ],
    [ "icono" => "⛵", "texto" => "Practicar vela o deportes náuticos" ],
    [ "icono" => "🍴", "texto" => "Comer en restaurantes con vistas al mar" ],
    [ "icono" => "📸", "texto" => "Fotografiar barcos y atardeceres" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-puerto-hendaia",
    "centro" => [43.3690, -1.7840],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.3690, -1.7840],
        "popup"  => "<strong>Puerto Deportivo de Hendaia</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información",
  "telefono" => [
    "texto"  => "+33 5 59 20 70 00",
    "enlace" => "tel:+33559207000"
  ],
  "web"      => [
    "texto" => "www.hendaye-tourisme.fr",
    "url"   => "https://www.hendaye-tourisme.fr"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Pierre D.",
        "texto"  => "Un lugar perfecto para pasear y disfrutar del ambiente marítimo."
    ],
    [
        "nombre" => "Ane L.",
        "texto"  => "Muy animado, con buenas terrazas y vistas."
    ],
    [
        "nombre" => "Luis F.",
        "texto"  => "Ideal para ver barcos y relajarse junto al agua."
    ],
    [
        "nombre" => "Clara M.",
        "texto"  => "Bonito puerto con mucho ambiente, sobre todo al atardecer."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.3690&lon=-1.7840&zoom=10"; 
?>