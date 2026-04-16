<?php 
$header = [
  "titulo" => "🏖️ Plage Centrale de Capbreton",
  "descripcion" => "Playa principal de Capbreton, famosa por su ambiente surfero y su amplia arena en la costa atlántica"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Plage Centrale de Capbreton</strong> es una de las playas más populares de la costa de Las Landas, en el suroeste de Francia.",
    "Con su extensa arena fina y sus potentes olas del océano Atlántico, es un destino ideal para surfistas de todos los niveles.",
    "El paseo marítimo y su cercanía al centro la convierten en una playa muy accesible, perfecta tanto para familias como para quienes buscan ambiente.",
    "Además, ofrece espectaculares puestas de sol y un entorno natural perfecto para disfrutar del mar durante todo el año."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/plage-centrale-capbreton-nouvelle-aquitaine-1.jpg",
      "alt" => "Vista panorámica de la Plage Centrale de Capbreton"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/olas-surf-capbreton.jpg",
      "alt" => "Olas en la Plage Centrale de Capbreton"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/IITiV8hqoSU",
      "titulo" => "Video de la Plage Centrale de Capbreton"
  ]
];
?>



<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/atardecer-playa-capbreton.jpg",
        "alt" => "Atardecer en la Plage Centrale de Capbreton",
        "caption" => "Atardecer en la playa de Capbreton",
        "fuente" => "https://www.capbreton.fr",
        "fuente_texto" => "capbreton.fr"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/surf-playa-capbreton.jpg",
        "alt" => "Surf en Capbreton",
        "caption" => "Playa ideal para surfistas",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/arena-playa-capbreton.jpg",
        "alt" => "Arena de la playa de Capbreton",
        "caption" => "Amplia playa de arena fina",
        "fuente" => "https://www.landesatlantiquesud.com",
        "fuente_texto" => "landesatlantiquesud.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/vista-aerea-capbreton.png",
        "alt" => "Vista aérea de Capbreton",
        "caption" => "Vista panorámica de la Plage Centrale",
        "fuente" => "https://www.surf-forecast.com",
        "fuente_texto" => "surf-forecast.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de la Plage Centrale de Capbreton",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Capbreton, Landes, Nouvelle-Aquitaine (Francia)"
    ],
    [
      "icono" => "📏",
      "titulo" => "Longitud",
      "descripcion" => "Aprox. 1000 metros de playa"
    ],
    [
      "icono" => "🌊",
      "titulo" => "Entorno",
      "descripcion" => "Playa urbana con acceso directo, paseo marítimo y vistas al Atlántico"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Puntos de interés",
      "descripcion" => "Surf, ambiente animado, puestas de sol y cercanía al puerto"
    ],
    [
      "icono" => "🅿️",
      "titulo" => "Servicios",
      "descripcion" => "Aparcamiento, duchas, restaurantes, escuelas de surf y vigilancia en temporada"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🏄‍♂️ Actividades en la Plage Centrale de Capbreton",
  "items"  => [
    [ "icono" => "🏄‍♂️", "texto" => "Surf en una de las mejores zonas del Atlántico europeo" ],
    [ "icono" => "🌊", "texto" => "Baño y juegos en la playa" ],
    [ "icono" => "🚶‍♂️", "texto" => "Paseos por el paseo marítimo y la orilla" ],
    [ "icono" => "🌅", "texto" => "Disfrutar de espectaculares atardeceres" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-plage-centrale-capbreton",
    "centro" => [43.6425, -1.4315],
    "zoom"   => 13.4,
    "marker" => [
        "coords" => [43.6440, -1.4325],
        "popup"  => "<strong>Plage Centrale de Capbreton</strong>"
    ]
];
?>

<?php
$contacto = [
  "titulo"   => "📞 Información de contacto",
  "telefono" => [
    "texto"  => "+33 5 58 72 12 11",
    "enlace" => "tel:+33558721211"
  ],
  "web"      => [
    "texto" => "www.capbreton.fr",
    "url"   => "https://www.capbreton.fr"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Laura M.",
        "texto"  => "Una playa increíble para surfear y disfrutar del ambiente."
    ],
    [
        "nombre" => "Javier T.",
        "texto"  => "Muy bien equipada y perfecta para pasar el día."
    ],
    [
        "nombre" => "Sophie D.",
        "texto"  => "Me encantaron las vistas y el atardecer."
    ],
    [
        "nombre" => "Miguel A.",
        "texto"  => "Ambiente animado y muy cerca de todo."
    ]
];
?>

<?php  
$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>