<?php 
$header = [
  "titulo" => "🚴 Piste Cyclable La Vélodyssée en Capbreton",
  "descripcion" => "Ruta ciclista costera que atraviesa Capbreton, ideal para disfrutar del Atlántico entre bosques y playas"
];
?>

<?php 
$intro = [
  "parrafos" => [
    "La <strong>Piste Cyclable La Vélodyssée</strong> es una de las rutas ciclistas más importantes de Francia, que atraviesa Capbreton siguiendo la costa atlántica.",
    "Este itinerario forma parte de un recorrido de más de 1.200 km que conecta el norte y el sur del país, pasando por paisajes naturales únicos.",
    "En Capbreton, la ruta combina tramos junto al océano con zonas de bosque de pinos, ofreciendo un entorno tranquilo y seguro para ciclistas.",
    "Es perfecta tanto para paseos familiares como para cicloturismo, con múltiples accesos, áreas de descanso y servicios a lo largo del recorrido."
  ],
  "imagenes" => [
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/piste-cyclable-velodyssee-capbreton.jpg",
      "alt" => "Carril bici La Vélodyssée en Capbreton"
    ],
    [
      "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/ciclistas-bosque-landas.jpg",
      "alt" => "Ciclistas en bosque de pinos en Las Landas"
    ]
  ],
  "video" => [
      "url" => "https://www.youtube.com/embed/9mX0K2FQZ7A",
      "titulo" => "La Vélodyssée en la costa atlántica"
  ]
];
?>

<?php
$galeria_imagenes = [
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/carril-bici-capbreton.jpg",
        "alt" => "Carril bici junto al mar en Capbreton",
        "caption" => "Ruta ciclista junto al océano",
        "fuente" => "https://www.lavelodyssee.com",
        "fuente_texto" => "lavelodyssee.com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/bosque-landas-ciclismo.jpg",
        "alt" => "Ruta ciclista en bosque de Las Landas",
        "caption" => "Tramos entre naturaleza",
        "fuente" => "",
        "fuente_texto" => ".com"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/familia-bici-capbreton.jpg",
        "alt" => "Familia en bicicleta en Capbreton",
        "caption" => "Ideal para todos los niveles",
        "fuente" => "https://www.capbreton.fr",
        "fuente_texto" => "capbreton.fr"
    ],
    [
        "src" => PATH_HREF_CARPETA_LUGARES_INTERES_IMAGENES . "/ruta-costa-atlantica-bici.jpg",
        "alt" => "Ruta ciclista costa atlántica",
        "caption" => "Parte de la Vélodyssée",
        "fuente" => "https://www.landesatlantiquesud.com",
        "fuente_texto" => "landesatlantiquesud.com"
    ]
];
?>

<?php
$info = [
  "titulo" => "ℹ️ Información de La Vélodyssée en Capbreton",
  "items" => [
    [
      "icono" => "📍",
      "titulo" => "Ubicación",
      "descripcion" => "Capbreton, Landes, Nouvelle-Aquitaine (Francia)"
    ],
    [
      "icono" => "🚴",
      "titulo" => "Tipo",
      "descripcion" => "Ruta ciclista de larga distancia"
    ],
    [
      "icono" => "📏",
      "titulo" => "Recorrido",
      "descripcion" => "Parte de una ruta de más de 1.200 km a lo largo del Atlántico"
    ],
    [
      "icono" => "🌿",
      "titulo" => "Entorno",
      "descripcion" => "Bosques de pinos, costa atlántica y zonas naturales"
    ],
    [
      "icono" => "⭐",
      "titulo" => "Servicios",
      "descripcion" => "Carril señalizado, áreas de descanso y accesos desde la ciudad"
    ]
  ]
];
?>

<?php 
$actividades = [
  "titulo" => "🚴 Actividades en La Vélodyssée",
  "items"  => [
    [ "icono" => "🚴‍♂️", "texto" => "Recorrer la ruta en bicicleta" ],
    [ "icono" => "🌿", "texto" => "Disfrutar de la naturaleza y el paisaje" ],
    [ "icono" => "📸", "texto" => "Fotografiar la costa y los bosques" ],
    [ "icono" => "👨‍👩‍👧", "texto" => "Paseos en familia en un entorno seguro" ]
  ]
];
?>

<?php
$mapa = [
    "titulo" => "🗺️ Localización",
    "map_id" => "map-velodyssee-capbreton",
    "centro" => [43.6455, -1.4290],
    "zoom"   => 13,
    "marker" => [
        "coords" => [43.6455, -1.4290],
        "popup"  => "<strong>La Vélodyssée - Capbreton</strong>"
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
    "texto" => "www.lavelodyssee.com",
    "url"   => "https://www.lavelodyssee.com"
  ]
];
?>

<?php
$comentarios = [
    [
        "nombre" => "Pierre L.",
        "texto"  => "Una ruta fantástica para descubrir la costa en bici."
    ],
    [
        "nombre" => "María G.",
        "texto"  => "Muy bien señalizada y perfecta para familias."
    ],
    [
        "nombre" => "David R.",
        "texto"  => "Paisajes increíbles entre bosque y mar."
    ],
    [
        "nombre" => "Claire T.",
        "texto"  => "Ideal para cicloturismo, muy recomendable."
    ]
];
?>

<?php  
$latitude  = 43.6455;
$longitude = -1.4290;

$iframeSrc = "https://openweathermap.org/weathermap?basemap=map&cities=true&layer=temperature&lat={$latitude}&lon={$longitude}&zoom=10"; 
?>