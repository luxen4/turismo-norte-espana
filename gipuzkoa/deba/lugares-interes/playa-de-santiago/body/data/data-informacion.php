<?php 
$header = [
  "titulo" => "🏖️ Playa de Santiago (Deba)",
  "descripcion" => "Una de las playas más extensas de Gipuzkoa, ideal para paseos, surf y disfrutar del paisaje costero vasco"
];
?>

<?php
$intro = [
  "parrafos" => [
    "La <strong>Playa de Santiago</strong> en Deba es una de las más amplias de la costa de Gipuzkoa, perfecta para disfrutar del mar Cantábrico en un entorno natural único.",
    "Es conocida por su arena fina y su longitud, lo que la convierte en un lugar ideal tanto para familias como para quienes buscan tranquilidad.",
    "Además, es un destino popular para surfistas gracias a sus buenas olas y condiciones favorables durante gran parte del año.",
    "Su ubicación junto al casco urbano de Deba permite combinar playa, gastronomía y paseos por el entorno costero."
  ],
  "imagenes" => [
    [
      "src" => "https://upload.wikimedia.org/wikipedia/commons/5/5c/Deba_Santiago_hondartza.jpg",
      "alt" => "Vista de la Playa de Santiago en Deba",
      "caption" => "Playa de Santiago en Deba",
      "fuente" => "https://es.wikipedia.org/wiki/Deba",
      "fuente_texto" => "wikipedia.org"
    ],
    [
      "src" => "https://turismo.euskadi.eus/contenidos/playa/deba_santiago/es_def/adjuntos/deba_playa_santiago.jpg",
      "alt" => "Playa de Santiago con el pueblo de Deba al fondo",
      "caption" => "Vista de la playa y el casco urbano",
      "fuente" => "https://turismo.euskadi.eus",
      "fuente_texto" => "turismo.euskadi.eus"
    ]
  ],
  "video" => [
    "url" => "https://www.youtube.com/embed/7wZJz8m0n9k",
    "titulo" => "Video de la Playa de Santiago en Deba"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => "https://www.deba.eus/sites/default/files/2020-06/santiago_hondartza.jpg",
        "alt" => "Vista panorámica de la Playa de Santiago",
        "caption" => "Vista panorámica",
        "fuente" => "https://www.deba.eus",
        "fuente_texto" => "deba.eus"
    ],
    [
        "src" => "https://www.costavasca.net/wp-content/uploads/2015/05/deba-playa.jpg",
        "alt" => "Playa de Santiago desde el paseo marítimo",
        "caption" => "Playa desde el paseo",
        "fuente" => "https://www.costavasca.net",
        "fuente_texto" => "costavasca.net"
    ],
    [
        "src" => "https://www.surf30.net/wp-content/uploads/2018/03/deba.jpg",
        "alt" => "Surf en la Playa de Santiago",
        "caption" => "Surf en Deba",
        "fuente" => "https://www.surf30.net",
        "fuente_texto" => "surf30.net"
    ],
    [
        "src" => "https://www.euskoguide.com/wp-content/uploads/2018/08/deba-playa.jpg",
        "alt" => "Atardecer en la Playa de Santiago",
        "caption" => "Atardecer en Deba",
        "fuente" => "https://www.euskoguide.com",
        "fuente_texto" => "euskoguide.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Playa de Santiago",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Deba, Gipuzkoa (País Vasco)"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "Aproximadamente 500 metros"
    ],
    [
      "icono" => "🏖️",
      "titulo" => "Tipo de playa",
      "descripcion" => "Arena fina y dorada"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Oleaje",
      "descripcion" => "Moderado, ideal para surf"
    ],
    [
      "icono" => "🚿",
      "titulo" => "Servicios",
      "descripcion" => "Duchas, socorristas, acceso adaptado, bares cercanos"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏄‍♂️ Actividades en la Playa de Santiago",
  "items"  => [
    [ "icono" => "🏊‍♂️", "texto" => "Baño en el mar Cantábrico" ],
    [ "icono" => "🏄‍♂️", "texto" => "Surf y deportes acuáticos" ],
    [ "icono" => "🚶‍♂️", "texto" => "Paseos por la playa y el paseo marítimo" ],
    [ "icono" => "📸", "texto" => "Fotografía de paisajes costeros" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-playa-santiago-deba",
    "centro" => [43.2945, -2.3535],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.2950, -2.3530],
        "popup"  => "<strong>Playa de Santiago - Deba</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información turística",
  "telefono" => [
    "texto"  => "+34 943 19 20 00",
    "enlace" => "tel:+34943192000"
  ],
  "web"      => [
    "texto" => "www.deba.eus",
    "url"   => "https://www.deba.eus"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Marta L.",
        "texto"  => "Playa amplia y perfecta para pasear, muy tranquila."
    ],
    [
        "nombre" => "Iker G.",
        "texto"  => "Buen sitio para surfear y disfrutar del mar."
    ],
    [
        "nombre" => "Laura S.",
        "texto"  => "Muy limpia y con todos los servicios necesarios."
    ],
    [
        "nombre" => "Jon A.",
        "texto"  => "Ideal para pasar el día en familia."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat=43.2945&lon=-2.3535&zoom=10"; 
?>