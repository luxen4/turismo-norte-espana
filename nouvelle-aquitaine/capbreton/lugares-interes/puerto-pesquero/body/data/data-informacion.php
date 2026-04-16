<?php 
$header = [
  "titulo" => "⚓ Puerto Pesquero de Capbreton",
  "descripcion" => "El único puerto pesquero de Las Landas, con tradición marinera y ambiente auténtico en la costa atlántica"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "El <strong>Puerto Pesquero de Capbreton</strong> es uno de los lugares más emblemáticos de la ciudad y el único puerto pesquero del departamento de Las Landas.",
    "Aquí se mantiene viva la tradición marítima, con barcos que salen a faenar y traen pescado fresco diariamente.",
    "El puerto ofrece un ambiente auténtico, con restaurantes donde degustar productos del mar y paseos agradables junto al canal.",
    "Además, su cercanía al océano y al centro de Capbreton lo convierte en un lugar ideal para conocer la cultura local y disfrutar de vistas únicas."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puerto-pesquero-capbreton.jpg",
      "alt" => "Puerto pesquero de Capbreton con barcos"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/barcos-pesca-capbreton.jpg",
      "alt" => "Barcos de pesca en el puerto de Capbreton"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/3yX0Qz5wF3A",
      "titulo" => "Puerto Pesquero de Capbreton"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/puerto-atardecer-capbreton.jpg",
        "alt" => "Atardecer en el puerto de Capbreton",
        "caption" => "Atardecer en el puerto",
        "fuente" => "https://www.capbreton.fr",
        "fuente_texto" => "capbreton.fr"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/mercado-pescado-capbreton.jpg",
        "alt" => "Venta de pescado en el puerto",
        "caption" => "Producto fresco del mar",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/canal-puerto-capbreton.jpg",
        "alt" => "Canal del puerto de Capbreton",
        "caption" => "Paseo junto al canal",
        "fuente" => "https://www.landesatlantiquesud.com",
        "fuente_texto" => "landesatlantiquesud.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/vista-aerea-puerto-capbreton.jpg",
        "alt" => "Vista aérea del puerto de Capbreton",
        "caption" => "Vista panorámica del puerto",
        "fuente" => "https://www.surf-forecast.com",
        "fuente_texto" => "surf-forecast.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información del Puerto Pesquero de Capbreton",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Capbreton, Landes, Nouvelle-Aquitaine (Francia)"
    ],
    [
      "icono" => "⚓",
      "titulo" => "Tipo",
      "descripcion" => "Puerto pesquero tradicional"
    ],
    [
      "icono" => "🐟",
      "titulo" => "Actividad",
      "descripcion" => "Pesca diaria y venta de pescado fresco"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Interés",
      "descripcion" => "Ambiente marinero, gastronomía y paseos junto al agua"
    ],
    [
      "icono" => "🍴",
      "titulo" => "Servicios",
      "descripcion" => "Restaurantes, terrazas, mercado de pescado y zona peatonal"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "⚓ Actividades en el Puerto de Capbreton",
  "items"  => [
    [ "icono" => "🚶‍♂️", "texto" => "Pasear junto al canal y el puerto" ],
    [ "icono" => "🍽️", "texto" => "Degustar pescado fresco en restaurantes locales" ],
    [ "icono" => "📸", "texto" => "Fotografiar barcos y ambiente marinero" ],
    [ "icono" => "🌅", "texto" => "Disfrutar del atardecer junto al agua" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-puerto-capbreton",
    "centro" => [43.6448, -1.4285],
    "zoom"   => 14,
    "marker" => [
        "coords" => [43.6448, -1.4285],
        "popup"  => "<strong>Puerto Pesquero de Capbreton</strong>"
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
        "nombre" => "Jean M.",
        "texto"  => "Un lugar auténtico con mucho encanto marinero."
    ],
    [
        "nombre" => "Laura S.",
        "texto"  => "Perfecto para pasear y comer buen pescado."
    ],
    [
        "nombre" => "Carlos G.",
        "texto"  => "Muy bonito al atardecer, ambiente tranquilo."
    ],
    [
        "nombre" => "Sophie R.",
        "texto"  => "Me encantó ver los barcos y la actividad pesquera."
    ]
];
?>

<?php  
$latitude  = 43.6448;
$longitude = -1.4285;

$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>